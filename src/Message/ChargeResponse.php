<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\Common\Message\AbstractResponse;

class ChargeResponse extends AbstractResponse
{
    /**
     * The default ns2 set within the SOAP-ENV:Body response
     *
     * @var string
     */
    protected $namespace = '//ns2:CalculateFeeResponse';

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return isset($this->data->xpath($this->namespace)[0]);
    }

    /**
     * Return the PLC from the response
     *
     * @return string|null
     */
    public function getPlc()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:plc')[0]) ? (string) $this->data->xpath($this->namespace . '/ns2:plc')[0] : null;
    }

    /**
     * Return the Fee Amount from the response
     *
     * @return string|null
     */
    public function getFeeAmount()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:feeAmount')[0]) ? (string) $this->data->xpath($this->namespace . '/ns2:feeAmount')[0] : null;
    }

    /**
     * Return the Total Amount from the response
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return isset($this->data->xpath($this->namespace . '//ns2:totalAmount')[0]) ? (string) $this->data->xpath($this->namespace . '/ns2:totalAmount')[0] : null;
    }
}
