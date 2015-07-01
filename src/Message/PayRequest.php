<?php namespace Omnipay\GovPayNet\Message;

use Guzzle\Http\Exception\ClientErrorResponseException;
use Omnipay\Common\Exception\InvalidCreditCardException;
use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\GovPayNet\Common\GovPayNetCard;

/**
 * @package    Omnipay\GovPayNet
 *
 * @copyright  Flexcoders Ltd
 *
 * @author     Luke Steadman <ljsteadman@gmail.com>
 * @author     FlexCoders Ltd, London, UK
 */
class PayRequest extends AbstractRequest
{
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
            'card',
            'defendantFirstName',
            'defendantLastName',
            'notes'
        );

        $card = $this->getCard();

        if ($card instanceof GovPayNetCard) {
            // Force validation if not in test mode
            if (!$this->getTestMode()) {
                $card->validate();
            }
        } else {
            throw new InvalidCreditCardException('$card must be an instance of GovPayNetCard');
        }

        $document = new \DOMDocument('1.0', 'utf-8');
        $document->formatOutput = false;

        $envelope = $document->appendChild(
            $document->createElementNS('http://schemas.xmlsoap.org/soap/envelope/', 'SOAP-ENV:Envelope')
        );

        $envelope->appendChild(
            $document->createElement('SOAP-ENV:Header')
        );

        $body = $envelope->appendChild(
            $document->createElement('SOAP-ENV:Body')
        );

        $payRequest = $body->appendChild(
            $document->createElement('ns3:PayRequest')
        );

        $payRequest->setAttribute('xmlns:ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $payRequest->setAttribute('xmlns:ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $payRequest->appendChild(
            $document->createElement('ns3:plc', $this->getPlc())
        );

        $amounts = $payRequest->appendChild(
            $document->createElement('ns3:amounts')
        );

        $amount = $amounts->appendChild(
            $document->createElement('ns3:amount')
        );

        $amount->appendChild(
            $document->createElement('ns2:amount', $this->getAmount())
        );

        $amount->appendChild(
            $document->createElement('ns2:amountId', 1)
        );

        $payLocationPaymentInformation = $payRequest->appendChild(
            $document->createElement('ns3:payLocationPaymentInformation')
        );

        $fields = $payLocationPaymentInformation->appendChild(
            $document->createElement('ns3:fields')
        );

        $nameFieldName = $fields->appendChild(
            $document->createElement('ns3:field')
        );

        $nameFieldName->appendChild(
            $document->createElement('ns2:name', 'Name')
        );

        $nameFieldValue = $nameFieldName->appendChild(
            $document->createElement('ns2:value')
        );

        $defendant = $nameFieldValue->appendChild(
            $document->createElement('ns2:defendant')
        );

        $defendant->appendChild(
            $document->createElement('ns2:first', $this->getDefendantFirstName())
        );

        $defendant->appendChild(
            $document->createElement('ns2:middle', $this->getDefendantMiddleName())
        );

        $defendant->appendChild(
            $document->createElement('ns2:last', $this->getDefendantLastName())
        );

        $nameFieldNote = $fields->appendChild(
            $document->createElement('ns3:field')
        );

        $nameFieldNote->appendChild(
            $document->createElement('ns2:name', 'Notes')
        );

        $notes = $nameFieldNote->appendChild(
            $document->createElement('ns2:value')
        );

        $notes->appendChild(
            $document->createElement('ns2:alphanum', $this->getNotes())
        );

        $billingName = $payRequest->appendChild(
            $document->createElement('ns3:billingName')
        );

        $billingName->appendChild(
            $document->createElement('ns2:first', $card->getFirstName())
        );

        $billingName->appendChild(
            $document->createElement('ns2:middle', $card->getMiddleName())
        );

        $billingName->appendChild(
            $document->createElement('ns2:last', $card->getLastName())
        );

        $billingAddress = $payRequest->appendChild(
            $document->createElement('ns3:billingAddress')
        );

        $billingAddress->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $billingAddress->setAttribute('xsi:type', 'ns2:USAddress');

        $billingAddress->appendChild(
            $document->createElement('ns2:street', $card->getBillingAddress1())
        );

        $billingAddress->appendChild(
            $document->createElement('ns2:street2', $card->getBillingAddress2())
        );

        $billingAddress->appendChild(
            $document->createElement('ns2:city', $card->getBillingCity())
        );

        $billingAddress->appendChild(
            $document->createElement('ns2:zip', $card->getBillingPostcode())
        );

        $billingAddress->appendChild(
            $document->createElement('ns2:state', $card->getBillingState())
        );

        $billingCard = $payRequest->appendChild(
            $document->createElement('ns3:billingCard')
        );

        $billingCard->appendChild(
            $document->createElement('ns2:type', $card->getBrand())
        );

        $billingCard->appendChild(
            $document->createElement('ns2:number', $card->getNumber())
        );

        $billingCard->appendChild(
            $document->createElement('ns2:securityCode', $card->getCvv())
        );

        $billingCard->appendChild(
            $document->createElement('ns2:expiration', $card->getExpiryDate('my'))
        );

        $billingPhone = $payRequest->appendChild(
            $document->createElement('ns3:billingPhone')
        );

        $billingPhone->appendChild(
            $document->createElement('ns2:areaCode', $card->getPhoneAreaCode())
        );

        $billingPhone->appendChild(
            $document->createElement('ns2:prefix', $card->getPhonePrefix())
        );

        $billingPhone->appendChild(
            $document->createElement('ns2:suffix', $card->getPhoneSuffix())
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
