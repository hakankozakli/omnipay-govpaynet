<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\Common\Message\AbstractRequest;

abstract class DefaultRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $testEndpoint = 'https://payments.stg.govpaynow.com/ws-soap/services/';

    /**
     * @var string
     */
    protected $liveEndpoint = 'https://payments.govpaynow.com/ws-soap/services/';

    /**
     * Return the endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value)
    {
        $this->setParameter('username', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        $this->setParameter('password', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * Get the PLC value
     *
     * @return string
     */
    public function getPlc()
    {
        return $this->getParameter('plc');
    }

    /**
     * Set the PLC value
     *
     * @param $value
     * @return string
     */
    public function setPlc($value)
    {
        return $this->setParameter('plc', $value);
    }
}
