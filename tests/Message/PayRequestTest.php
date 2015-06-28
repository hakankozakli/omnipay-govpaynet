<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\GovPayNet\Common\GovPayNetCard;
use Omnipay\Tests\TestCase;

class PayRequestTest extends TestCase
{
    /**
     * @var PayRequest
     */
    protected $request;

    /**
     * @var GovPayNetCard
     */
    protected $card;

    public function setUp()
    {
        parent::setUp();

        $this->card = new GovPayNetCard(array(
            'firstName' => 'Jill',
            'middleName' => 'A',
            'lastName' => 'Smith',
            'billingAddress1' => '123 Billingway',
            'billingAddress2' => 'Suite 700',
            'billingCity' => 'Indianapolis',
            'billingZip' => '46220',
            'billingState' => 'IN',
            'number' => '4457010000000009',
            'expiryMonth' => '01',
            'expiryYear' => '12',
            'cvv' => '349',
            'phoneAreaCode' => 317,
            'phoneSuffix' => 555,
            'phonePrefix' => 5555
        ));

        $this->request = new PayRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(array(
            'testMode' => true,
            'plc' => '9995',
            'amount' => '78.90',
            'card' => $this->card,
            'defendantFirstName' => 'Jon',
            'defendantMiddleName' => 'A',
            'defendantLastName' => 'Doe',
            'notes' => 'This is my special note.'
        ));
    }

    public function testGetData()
    {
        $data = $this->request->getData();

        $request = new \SimpleXMLElement($data);
        $request->registerXPathNamespace('ns2', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $request->registerXPathNamespace('ns3', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $this->assertNotNull($request->xpath('//ns3:PayRequest')[0]);
        $this->assertEquals('9995', (string) $request->xpath('//ns3:PayRequest/ns3:plc')[0]);
        $this->assertEquals('78.90', (string) $request->xpath('//ns3:PayRequest/ns3:amounts/ns3:amount/ns2:amount')[0]);
        $this->assertEquals('Jon', (string)$request->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field')[0]->xpath('ns2:value/ns2:defendant/ns2:first')[0]);
        $this->assertEquals('A', (string)$request->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field')[0]->xpath('ns2:value/ns2:defendant/ns2:middle')[0]);
        $this->assertEquals('Doe', (string)$request->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field')[0]->xpath('ns2:value/ns2:defendant/ns2:last')[0]);
        $this->assertEquals('This is my special note.', (string)$request->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field')[1]->xpath('ns2:value/ns2:alphanum')[0]);

        // Billing Name
        $this->assertEquals('Jill', (string)$request->xpath('//ns3:PayRequest/ns3:billingName/ns2:first')[0]);
        $this->assertEquals('A', (string)$request->xpath('//ns3:PayRequest/ns3:billingName/ns2:middle')[0]);
        $this->assertEquals('Smith', (string)$request->xpath('//ns3:PayRequest/ns3:billingName/ns2:last')[0]);

        // Billing Address
        $this->assertEquals('123 Billingway', (string)$request->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:street')[0]);
        $this->assertEquals('Suite 700', (string)$request->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:street2')[0]);
        $this->assertEquals('Indianapolis', (string)$request->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:city')[0]);
        $this->assertEquals('46220', (string)$request->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:zip')[0]);
        $this->assertEquals('IN', (string)$request->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:state')[0]);

        // Billing Card
        $this->assertEquals('VI', (string)$request->xpath('//ns3:PayRequest/ns3:billingCard/ns2:type')[0]);
        $this->assertEquals('4457010000000009', (string)$request->xpath('//ns3:PayRequest/ns3:billingCard/ns2:number')[0]);
        $this->assertEquals('349', (string)$request->xpath('//ns3:PayRequest/ns3:billingCard/ns2:securityCode')[0]);
        $this->assertEquals('0112', (string)$request->xpath('//ns3:PayRequest/ns3:billingCard/ns2:expiration')[0]);

        // Billing Phone
        $this->assertEquals('317', (string)$request->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:areaCode')[0]);
        $this->assertEquals('555', (string)$request->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:suffix')[0]);
        $this->assertEquals('5555', (string)$request->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:prefix')[0]);
    }
}