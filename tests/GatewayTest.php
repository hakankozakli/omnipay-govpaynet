<?php

namespace Omnipay\GovPayNet;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    /**
     * @var Gateway
     */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
        $this->gateway->setPlc('9995');
    }

    public function testCharge()
    {
        $request = $this->gateway->authorize(array(
            'amount' => '25.00'
        ));

        $this->assertSame('9995', $request->getPlc());
        $this->assertSame('25.00', $request->getAmount());
    }

    public function testPay()
    {
        $request = $this->gateway->purchase(array(
            'amount' => '100.00',
            'defendantFirstName' => 'Jon',
            'defendantMiddleName' => 'A',
            'defendantLastName' => 'Doe',
            'notes' => 'This is my special note.'
        ));

        $this->assertSame('9995', $request->getPlc());
        $this->assertSame('100.00', $request->getAmount());
        $this->assertSame('Jon', $request->getDefendantFirstName());
        $this->assertSame('A', $request->getDefendantMiddleName());
        $this->assertSame('Doe', $request->getDefendantLastName());
        $this->assertSame('This is my special note.', $request->getNotes());
    }
}
