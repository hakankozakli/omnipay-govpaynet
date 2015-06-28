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
        $namespace = $this->data->xpath($this->namespace);
        return isset($namespace[0]);
    }

    /**
     * Return the PLC from the response
     *
     * @return string|null
     */
    public function getPlc()
    {
        $plc = $this->data->xpath($this->namespace . '/ns2:plc');

        return isset($plc[0])
            ? (string) $plc[0]
            : null;
    }

    /**
     * Return the Fee Amount from the response
     *
     * @return string|null
     */
    public function getFeeAmount()
    {
        $feeAmount = $this->data->xpath($this->namespace . '/ns2:feeAmount');

        return isset($feeAmount[0])
            ? (string) $feeAmount[0]
            : null;
    }

    /**
     * Return the Total Amount from the response
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        $totalAmount = $this->data->xpath($this->namespace . '//ns2:totalAmount');

        return isset($totalAmount[0])
            ? (string) $totalAmount[0]
            : null;
    }
}
