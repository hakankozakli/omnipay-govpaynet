<?php namespace Omnipay\GovPayNet\Message;

use Omnipay\Tests\TestCase;

/**
 * @package    Omnipay\GovPayNet
 *
 * @copyright  Flexcoders Ltd
 *
 * @author     Luke Steadman <ljsteadman@gmail.com>
 * @author     FlexCoders Ltd, London, UK
 */
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

        $request = $request->xpath('//ns3:CalculateFeeRequest');
        $plc = $request[0]->xpath('ns3:plc');
        $amounts = $request[0]->xpath('ns3:amounts/ns3:amount');

        $this->assertNotNull($request[0]);
        $this->assertEquals('9995', (string) $plc[0]);
        $this->assertEquals('123.40', (string) $amounts[0]);
    }
}
