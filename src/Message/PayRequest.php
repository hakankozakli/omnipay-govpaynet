<?php
/**
 * @package    Omnipay\GovPayNet
 *
 * @copyright  FlexCoders Ltd, 2015
 *
 * @author     Luke Steadman <luke.steadman@flexcoders.co.uk>
 * @author     FlexCoders Ltd, London, UK
 */
namespace Omnipay\GovPayNet\Message;

use DOMDocument;
use Omnipay\Common\CreditCard;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Omnipay\Common\Exception\InvalidCreditCardException;
use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\GovPayNet\Common\GovPayNetCard;

class PayRequest extends AbstractRequest
{
    protected static $brands = array(
        CreditCard::BRAND_VISA => 'VI',
        CreditCard::BRAND_AMEX => 'AX',
        CreditCard::BRAND_DISCOVER => 'DI',
        CreditCard::BRAND_MASTERCARD => 'MC'
    );

    /**
     * Override the brand returned
     *
     * @return string
     */
    public function getBrand2()
    {
        $card = $this->getCard();
        $brand = $card->getBrand();

        if (array_key_exists($brand, static::$brands)) {
            return static::$brands[$brand];
        }

        return $brand;
    }

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @throws \Omnipay\Common\Exception\InvalidCreditCardException
     * @return mixed
     */
    public function getData()
    {
        $this->validate(
            'plc',
            'card'
        );

        $card = $this->getCard();

        //if ($card instanceof GovPayNetCard) {
            // Force validation if not in test mode
            if (!$this->getTestMode()) {
                $card->validate();
            }
        /*} else {
            throw new InvalidCreditCardException('$card must be an instance of GovPayNetCard');
        }*/

        $document = new DOMDocument('1.0', 'utf-8');
        $document->formatOutput = false;

        $envelope = $document->appendChild(
            $document->createElementNS('http://schemas.xmlsoap.org/soap/envelope/', 's:Envelope')
        );

        /*$header = $envelope->appendChild(
            $document->createElement('s:Header')
        );

        $agree = $header->appendChild(
            $document->createElement('ns:Action')
        );

        $agree->setAttribute('s:mustUnderstand', '1');
        $agree->setAttribute('xmlns', 'http://schemas.microsoft.com/ws/2005/05/addressing/none');
        */
        $body = $envelope->appendChild(
            $document->createElement('s:Body')
        );

        $body->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $body->setAttribute('xmlns:xsd', 'http://www.w3.org/2001/XMLSchema');

        $payRequest = $body->appendChild(
            $document->createElement('ns:PayRequest')
        );

        $payRequest->setAttribute('xmlns:ns', 'http://payments.govpaynow.com/ws-soap/schemas/payment');
        $payRequest->setAttribute('xmlns:ns1', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        //$payRequest->setAttribute('xsi:schemaLocation', 'http://payments.govpaynow.com/ws-soap/schemas/payment ../../main/webapp/schemas/payment-messages.xsd');

        $payRequest->appendChild(
            $document->createElement('ns:plc', $this->getPlc())
        );

        $amounts = $payRequest->appendChild(
            $document->createElement('ns:amounts')
        );

        $amount = $amounts->appendChild(
            $document->createElement('ns:amount')
        );

        $amount->appendChild(
            $document->createElement('ns1:amount', $this->getAmount())
        );

        $amount->appendChild(
            $document->createElement('ns1:amountId', 1)
        );

        $payLocationPaymentInformation = $payRequest->appendChild(
            $document->createElement('ns:payLocationPaymentInformation')
        );

        $fields = $payLocationPaymentInformation->appendChild(
            $document->createElement('ns:fields')
        );

        if($this->getDefendantFirstName()){
            $nameFieldName = $fields->appendChild(
                $document->createElement('ns:field')
            );

            $nameFieldName->appendChild(
                $document->createElement('ns1:name', 'Name')
            );

            $nameFieldValue = $nameFieldName->appendChild(
                $document->createElement('ns1:value')
            );

            $defendant = $nameFieldValue->appendChild(
                $document->createElement('ns1:defendant')
            );

            $defendant->appendChild(
                $document->createElement('ns1:first', $this->getDefendantFirstName())
            );

            $defendant->appendChild(
                $document->createElement('ns1:middle', $this->getDefendantMiddleName())
            );

            $defendant->appendChild(
                $document->createElement('ns1:last', $this->getDefendantLastName())
            );
        }

        if($this->getServerId()){

            $nameFieldBusiness = $fields->appendChild(
                $document->createElement('ns:field')
            );

            $nameFieldBusiness->appendChild(
                $document->createElement('ns1:name', 'Server Id')
            );

            $nameFieldBusinessValue = $nameFieldBusiness->appendChild(
                $document->createElement('ns1:value')
            );

            $nameFieldBusinessValue->appendChild(
                $document->createElement('ns1:alphanum', $this->getServerId())
            );
        }

        if($this->getInvoiceNum()){

            $nameFieldBusiness = $fields->appendChild(
                $document->createElement('ns:field')
            );

            $nameFieldBusiness->appendChild(
                $document->createElement('ns1:name', 'InvoiceNum')
            );

            $nameFieldBusinessValue = $nameFieldBusiness->appendChild(
                $document->createElement('ns1:value')
            );

            $nameFieldBusinessValue->appendChild(
                $document->createElement('ns1:alphanum', $this->getInvoiceNum())
            );
        }

        if($this->getPublicationNum()){

            $nameFieldBusiness = $fields->appendChild(
                $document->createElement('ns:field')
            );

            $nameFieldBusiness->appendChild(
                $document->createElement('ns1:name', 'PublicationNum')
            );

            $nameFieldBusinessValue = $nameFieldBusiness->appendChild(
                $document->createElement('ns1:value')
            );

            $nameFieldBusinessValue->appendChild(
                $document->createElement('ns1:alphanum', $this->getPublicationNum())
            );
        }

        if($this->getTransactionNum()){

            $nameFieldBusiness = $fields->appendChild(
                $document->createElement('ns:field')
            );

            $nameFieldBusiness->appendChild(
                $document->createElement('ns1:name', 'TransactionNum')
            );

            $nameFieldBusinessValue = $nameFieldBusiness->appendChild(
                $document->createElement('ns1:value')
            );

            $nameFieldBusinessValue->appendChild(
                $document->createElement('ns1:alphanum', $this->getTransactionNum())
            );
        }

        $billingName = $payRequest->appendChild(
            $document->createElement('ns:billingName')
        );

        $billingName->appendChild(
            $document->createElement('ns1:first', $card->getFirstName())
        );

        $billingName->appendChild(
            $document->createElement('ns1:middle', $this->getMiddleName())
        );

        $billingName->appendChild(
            $document->createElement('ns1:last', $card->getLastName())
        );

        $billingAddress = $payRequest->appendChild(
            $document->createElement('ns:billingAddress')
        );

        $billingAddress->setAttribute('xsi:type', 'ns1:USAddress');

        $billingAddress->appendChild(
            $document->createElement('ns1:street', $card->getBillingAddress1())
        );

        $billingAddress->appendChild(
            $document->createElement('ns1:street2', $card->getBillingAddress2())
        );

        $billingAddress->appendChild(
            $document->createElement('ns1:city', $card->getBillingCity())
        );

        $billingAddress->appendChild(
            $document->createElement('ns1:zip', $card->getBillingPostcode())
        );

        $billingAddress->appendChild(
            $document->createElement('ns1:state', $card->getBillingState())
        );

        $billingCard = $payRequest->appendChild(
            $document->createElement('ns:billingCard')
        );

        $billingCard->appendChild(
            $document->createElement('ns1:type', $this->getBrand2())
        );

        $billingCard->appendChild(
            $document->createElement('ns1:number', $card->getNumber())
        );

        $billingCard->appendChild(
            $document->createElement('ns1:securityCode', $card->getCvv())
        );

        $billingCard->appendChild(
            $document->createElement('ns1:expiration', $card->getExpiryDate('my'))
        );

        return $document->saveXML();
    }

    /**
     * Get the notes value
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->getParameter('notes');
    }

    /**
     * Set the notes value
     *
     * @param $value
     * @return string
     */
    public function setNotes($value)
    {
        return $this->setParameter('notes', $value);
    }

    /**
     * Get the defendant first name value
     *
     * @return string
     */
    public function getDefendantFirstName()
    {
        return $this->getParameter('defendantFirstName');
    }

    /**
     * Set the defendant first name value
     *
     * @param $value
     * @return string
     */
    public function setDefendantFirstName($value)
    {
        return $this->setParameter('defendantFirstName', $value);
    }

    /**
     * Get the defendant middle name value
     *
     * @return string
     */
    public function getDefendantMiddleName()
    {
        return $this->getParameter('defendantMiddleName');
    }


/**
     * Get the defendant middle name value
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->getParameter('middleName');
    }

    /**
     * Set the defendant middle name value
     *
     * @param $value
     * @return string
     */
    public function setDefendantMiddleName($value)
    {
        return $this->setParameter('defendantMiddleName', $value);
    }

    /**
     * Get the defendant last name value
     *
     * @return string
     */
    public function getDefendantLastName()
    {
        return $this->getParameter('defendantLastName');
    }

    /**
     * Set the defendant last name value
     *
     * @param $value
     * @return string
     */
    public function setDefendantLastName($value)
    {
        return $this->setParameter('defendantLastName', $value);
    }

    /**
     * Get the server id value
     *
     * @return string
     */
    public function getServerId()
    {
        return $this->getParameter('serverId');
    }

    /**
     * Set the server id value
     *
     * @param $value
     * @return string
     */
    public function setServerId($value)
    {
        return $this->setParameter('serverId', $value);
    }


    /**
     * Get the server id value
     *
     * @return string
     */
    public function getInvoiceNum()
    {
        return $this->getParameter('invoiceNum');
    }

    /**
     * Set the server id value
     *
     * @param $value
     * @return string
     */
    public function setInvoiceNum($value)
    {
        return $this->setParameter('invoiceNum', $value);
    }

    /**
     * Get the server id value
     *
     * @return string
     */
    public function getPublicationNum()
    {
        return $this->getParameter('publicationNum');
    }

    /**
     * Set the server id value
     *
     * @param $value
     * @return string
     */
    public function setPublicationNum($value)
    {
        return $this->setParameter('publicationNum', $value);
    }

    /**
     * Get the server id value
     *
     * @return string
     */
    public function getTransactionNum()
    {
        return $this->getParameter('transactionNum');
    }

    /**
     * Set the server id value
     *
     * @param $value
     * @return string
     */
    public function setTransactionNum($value)
    {
        return $this->setParameter('transactionNum', $value);
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     * @throws InvalidResponseException
     * @throws ClientErrorResponseException
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $headers = array(
            'Content-Type' => 'text/xml; charset=utf-8'
        );
        
        $httpRequest = $this->httpClient
            ->createRequest('POST', $this->getEndpoint(), $headers, $data)
            ->setAuth($this->getUsername(), $this->getPassword());

        try {
            $httpResponse = $httpRequest->send();
            $xmlResponse = $httpResponse->xml()->children('http://schemas.xmlsoap.org/soap/envelope/');
        } catch (ClientErrorResponseException $e) {
            throw $e;
        }

        $xmlResponse->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment');
        $xmlResponse->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');

        $payResponse = $xmlResponse->xpath('//ns2:PayResponse');

        if (!isset($payResponse[0])) {
            throw new InvalidResponseException('Invalid XML response');
        }

        return new PayResponse($this, $xmlResponse);
    }
}
