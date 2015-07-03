<?php
/**
 * @package    Omnipay\GovPayNet
 *
 * @copyright  Flexcoders Ltd
 *
 * @author     Luke Steadman <ljsteadman@gmail.com>
 * @author     FlexCoders Ltd, London, UK
 */
namespace Omnipay\GovPayNet\Message;

use Omnipay\Tests\TestCase;
use SimpleXMLElement;

class PayResponseTest extends TestCase
{
    public function testSuccess()
    {
        $httpResponse = $this->getMockHttpResponse('PaySuccess.txt');

        $xmlElement = new SimpleXMLElement($httpResponse->getBody(true));

        $xmlResponse = $xmlElement
            ->children('http://schemas.xmlsoap.org/soap/envelope/');

        $xmlResponse->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $xmlResponse->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $response = new PayResponse($this->getMockRequest(), $xmlResponse);

        $this->assertTrue($response->isSuccessful());
        $this->assertSame('PAY-0', $response->getCode());
        $this->assertSame('Approved', $response->getMessage());
    }
}
