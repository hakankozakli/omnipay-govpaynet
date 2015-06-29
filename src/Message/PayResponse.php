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
        $payResponse = $this->data->xpath($this->namespace);

        return isset($payResponse[0]) && $this->getCode() == static::RESPONSE_CODE_SUCCESSFUL;
    }

    /**
     * Return the Code from the response
     *
     * @return string|null
     */
    public function getCode()
    {
        $code = $this->data->xpath($this->namespace . '/ns2:code');

        return isset($code[0])
            ? (string) $code[0]
            : null;
    }

    /**
     * Return the Message from the response
     *
     * @return string|null
     */
    public function getMessage()
    {
        $message = $this->data->xpath($this->namespace . '/ns2:message');

        return isset($message[0])
            ? (string) $message[0]
            : null;
    }

    /**
     * Return the Transaction Reference ID from the response
     *
     * @return null|string
     */
    public function getTransactionReferenceId()
    {
        $transactionReferenceId = $this->data->xpath($this->namespace . '/ns2:transactionReferenceId');

        return isset($transactionReferenceId[0])
            ? (string) $transactionReferenceId[0]
            : null;
    }

    /**
     * Return the Card Authorization Code from the response
     *
     * @return null|string
     */
    public function getCardAuthCode()
    {
        $cardAuthCode = $this->data->xpath($this->namespace . '/ns2:cardAuthCode');

        return isset($cardAuthCode[0])
            ? (string) $cardAuthCode[0]
            : null;
    }

    /**
     * * Return the Amount Authorized from the response
     *
     * @return null|string
     */
    public function getAmountAuthorized()
    {
        $amountAuthorized = $this->data->xpath($this->namespace . '/ns2:amountAuthorized');

        return isset($amountAuthorized[0])
            ? (string) $amountAuthorized[0]
            : null;
    }
}
