<?php

namespace Omnipay\GovPayNet\Message;

use Guzzle\Http\Exception\ClientErrorResponseException;
use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\ResponseInterface;

class ChargeRequest extends DefaultRequest
{
    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        $this->validate(
            'plc',
            'amount'
        );

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

        $calculateFee = $body->appendChild(
            $document->createElement('ns3:CalculateFeeRequest')
        );

        $calculateFee->setAttribute('xmlns:ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $calculateFee->setAttribute('xmlns:ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $calculateFee->appendChild(
            $document->createElement('ns3:plc', $this->getPlc())
        );

        $amounts = $calculateFee->appendChild(
            $document->createElement('ns3:amounts')
        );

        $amounts->appendChild(
            $document->createElement('ns3:amount', $this->getAmount())
        );

        return $document->saveXML();
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     * @throws \Exception
     * @throws \Guzzle\Http\Exception\ClientErrorResponseException
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
            $xmlResponse = $httpResponse->xml()
                ->children('http://schemas.xmlsoap.org/soap/envelope/');
        } catch (ClientErrorResponseException $e) {
            throw $e;
        }

        $xmlResponse->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment');
        $xmlResponse->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');

        $calculateFeeResponse = $xmlResponse->xpath('//ns2:CalculateFeeResponse');

        if (!isset($calculateFeeResponse[0])) {
            throw new InvalidResponseException('Invalid XML response');
        }

        return new ChargeResponse($this, $xmlResponse);
    }
}
