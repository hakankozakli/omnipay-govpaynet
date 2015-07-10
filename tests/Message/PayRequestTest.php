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

use Omnipay\GovPayNet\Common\GovPayNetCard;
use Omnipay\Tests\TestCase;
use SimpleXMLElement;

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

        $request = new SimpleXMLElement($data);
        $request->registerXPathNamespace('ns1', 'http://payments.govpaynow.com/ws-soap/schemas/payment-types');
        $request->registerXPathNamespace('ns', 'http://payments.govpaynow.com/ws-soap/schemas/payment');

        $payRequest = $request->xpath('//ns:PayRequest');

        $plc = $payRequest[0]->xpath('ns:plc');
        $amount = $payRequest[0]->xpath('ns:amounts/ns:amount/ns1:amount');
        $this->assertNotNull($payRequest[0]);
        $this->assertEquals('9995', (string) $plc[0]);
        $this->assertEquals('78.90', (string) $amount[0]);

        $field1 = $payRequest[0]->xpath('//ns:PayRequest/ns:payLocationPaymentInformation/ns:fields/ns:field');
        $first = $field1[0]->xpath('ns1:value/ns1:defendant/ns1:first');
        $middle = $field1[0]->xpath('ns1:value/ns1:defendant/ns1:middle');
        $last = $field1[0]->xpath('ns1:value/ns1:defendant/ns1:last');
        $this->assertEquals('Jon', (string) $first[0]);
        $this->assertEquals('A', (string) $middle[0]);
        $this->assertEquals('Doe', (string) $last[0]);

        // Billing Name
        $firstName = $payRequest[0]->xpath('//ns:PayRequest/ns:billingName/ns1:first');
        $middleName = $payRequest[0]->xpath('//ns:PayRequest/ns:billingName/ns1:middle');
        $lastName = $payRequest[0]->xpath('//ns:PayRequest/ns:billingName/ns1:last');
        $this->assertEquals('Jill', (string)$firstName[0]);
        $this->assertEquals('A', (string)$middleName[0]);
        $this->assertEquals('Smith', (string)$lastName[0]);

        // Billing Address
        $street = $payRequest[0]->xpath('//ns:PayRequest/ns:billingAddress/ns1:street');
        $street2 = $payRequest[0]->xpath('//ns:PayRequest/ns:billingAddress/ns1:street2');
        $city = $payRequest[0]->xpath('//ns:PayRequest/ns:billingAddress/ns1:city');
        $zip = $payRequest[0]->xpath('//ns:PayRequest/ns:billingAddress/ns1:zip');
        $state = $payRequest[0]->xpath('//ns:PayRequest/ns:billingAddress/ns1:state');
        $this->assertEquals('123 Billingway', (string)$street[0]);
        $this->assertEquals('Suite 700', (string)$street2[0]);
        $this->assertEquals('Indianapolis', (string)$city[0]);
        $this->assertEquals('46220', (string)$zip[0]);
        $this->assertEquals('IN', (string)$state[0]);

        // Billing Card
        $type = $payRequest[0]->xpath('//ns:PayRequest/ns:billingCard/ns1:type');
        $number = $payRequest[0]->xpath('//ns:PayRequest/ns:billingCard/ns1:number');
        $cvv = $payRequest[0]->xpath('//ns:PayRequest/ns:billingCard/ns1:securityCode');
        $expiration = $payRequest[0]->xpath('//ns:PayRequest/ns:billingCard/ns1:expiration');
        $this->assertEquals('VI', (string)$type[0]);
        $this->assertEquals('4457010000000009', (string)$number[0]);
        $this->assertEquals('349', (string)$cvv[0]);
        $this->assertEquals('0112', (string)$expiration[0]);
    }
}
