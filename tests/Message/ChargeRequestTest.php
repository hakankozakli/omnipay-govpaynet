<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\Tests\TestCase;

class ChargeRequestTest extends TestCase
{
    /**
     * @var ChargeRequest
     */
    protected $request;


    public function setUp()
    {
        parent::setUp();

        $this->request = new ChargeRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(array(
            'plc' => '9995',
            'amount' => '123.40'
        ));
    }

    public function testGetData()
    {
        $data = $this->request->getData();

        $request = new \SimpleXMLElement($data);
        $request->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $request->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $this->assertNotNull($request->xpath('//ns3:CalculateFeeRequest')[0]);
        $this->assertEquals('9995', (string) $request->xpath('//ns3:CalculateFeeRequest/ns3:plc')[0]);
        $this->assertEquals('123.40', (string) $request->xpath('//ns3:CalculateFeeRequest/ns3:amounts')[0]->xpath('ns3:amount')[0]);
    }
}