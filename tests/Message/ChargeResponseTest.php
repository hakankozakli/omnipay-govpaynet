<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\Tests\TestCase;

class ChargeResponseTest extends TestCase
{
    public function testSuccess()
    {
        $httpResponse = $this->getMockHttpResponse('ChargeSuccess.txt');

        $xmlElement = new \SimpleXMLElement($httpResponse->getBody(true));

        $xmlResponse = $xmlElement
            ->children('http://schemas.xmlsoap.org/soap/envelope/');

        $xmlResponse->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $xmlResponse->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $response = new ChargeResponse($this->getMockRequest(), $xmlResponse);

        $total = 25.00 + $response->getFeeAmount();
        $fee = $response->getTotalAmount() - 25.00;

        $this->assertTrue($response->isSuccessful());
        $this->assertEquals($total, $response->getTotalAmount());
        $this->assertEquals($fee, $response->getFeeAmount());
        $this->assertEquals('9995', $response->getPlc());
    }
}
