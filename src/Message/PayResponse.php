<?php

namespace Omnipay\GovPayNet\Message;

use Omnipay\Common\Message\AbstractResponse;

class PayResponse extends AbstractResponse
{
    /**
     * The default ns2 set within the SOAP-ENV:Body response
     *
     * @var string
     */
    protected $namespace = '//ns2:PayResponse';

    const RESPONSE_CODE_SUCCESSFUL = 'PAY-0';

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return isset($this->data->xpath($this->namespace)[0]) && $this->getCode() == static::RESPONSE_CODE_SUCCESSFUL;
    }

    /**
     * Return the Code from the response
     *
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:code')[0])
            ? (string) $this->data->xpath($this->namespace . '//ns2:code')[0]
            : null;
    }

    /**
     * Return the Message from the response
     *
     * @return string|null
     */
    public function getMessage()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:message')[0])
            ? (string) $this->data->xpath($this->namespace . '//ns2:message')[0]
            : null;
    }

    /**
     * Return the Transaction Reference ID from the response
     *
     * @return null|string
     */
    public function getTransactionReferenceId()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:transactionReferenceId')[0])
            ? (string) $this->data->xpath($this->namespace . '//ns2:transactionReferenceId')[0]
            : null;
    }

    /**
     * Return the Card Authorization Code from the response
     *
     * @return null|string
     */
    public function getCardAuthCode()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:cardAuthCode')[0])
            ? (string) $this->data->xpath($this->namespace . '//ns2:cardAuthCode')[0]
            : null;
    }

    /**
     * * Return the Amount Authorized from the response
     *
     * @return null|string
     */
    public function getAmountAuthorized()
    {
        return isset($this->data->xpath($this->namespace . '/ns2:amountAuthorized')[0])
            ? (string) $this->data->xpath($this->namespace . '//ns2:amountAuthorized')[0]
            : null;
    }
}
