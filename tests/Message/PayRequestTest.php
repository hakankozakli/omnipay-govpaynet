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

        $payRequest = $request->xpath('//ns3:PayRequest');

        $this->assertNotNull($payRequest[0]);
        $this->assertEquals('9995', (string) $payRequest[0]->xpath('ns3:plc')[0]);
        $this->assertEquals('78.90', (string) $payRequest[0]->xpath('ns3:amounts/ns3:amount/ns2:amount')[0]);

        $field1 = $payRequest[0]->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field');
        $first = $field1[0]->xpath('ns2:value/ns2:defendant/ns2:first');
        $middle = $field1[0]->xpath('ns2:value/ns2:defendant/ns2:middle');
        $last = $field1[0]->xpath('ns2:value/ns2:defendant/ns2:last');
        $this->assertEquals('Jon', (string) $first[0]);
        $this->assertEquals('A', (string) $middle[0]);
        $this->assertEquals('Doe', (string) $last[0]);

        $field2 = $payRequest[0]->xpath('//ns3:PayRequest/ns3:payLocationPaymentInformation/ns3:fields/ns3:field');
        $notes = $field2[1]->xpath('ns2:value/ns2:alphanum');
        $this->assertEquals('This is my special note.', (string) $notes[0]);

        // Billing Name
        $firstName = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingName/ns2:first');
        $middleName = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingName/ns2:middle');
        $lastName = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingName/ns2:last');
        $this->assertEquals('Jill', (string)$firstName[0]);
        $this->assertEquals('A', (string)$middleName[0]);
        $this->assertEquals('Smith', (string)$lastName[0]);

        // Billing Address
        $street = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:street');
        $street2 = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:street2');
        $city = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:city');
        $zip = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:zip');
        $state = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingAddress/ns2:state');
        $this->assertEquals('123 Billingway', (string)$street[0]);
        $this->assertEquals('Suite 700', (string)$street2[0]);
        $this->assertEquals('Indianapolis', (string)$city[0]);
        $this->assertEquals('46220', (string)$zip[0]);
        $this->assertEquals('IN', (string)$state[0]);

        // Billing Card
        $type = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingCard/ns2:type');
        $number = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingCard/ns2:number');
        $cvv = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingCard/ns2:securityCode');
        $expiration = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingCard/ns2:expiration');
        $this->assertEquals('VI', (string)$type[0]);
        $this->assertEquals('4457010000000009', (string)$number[0]);
        $this->assertEquals('349', (string)$cvv[0]);
        $this->assertEquals('0112', (string)$expiration[0]);

        // Billing Phone
        $areaCode = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:areaCode');
        $suffix = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:suffix');
        $prefix = $payRequest[0]->xpath('//ns3:PayRequest/ns3:billingPhone/ns2:prefix');
        $this->assertEquals('317', (string)$areaCode[0]);
        $this->assertEquals('555', (string)$suffix[0]);
        $this->assertEquals('5555', (string)$prefix[0]);
    }
}
