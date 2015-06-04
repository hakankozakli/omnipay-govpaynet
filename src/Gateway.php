<?php

namespace Omnipay\GovPayNet;

use Omnipay\Common\AbstractGateway;
use Omnipay\GovPayNet\Message\AuthorizeRequest;

/**
 * GovPayNet Gateway
 *
 * This gateway is used to interact with the US payment service GovPayNet, popular in US government.
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'GovPayNet';
    }

    public function getDefaultParameters()
    {
        return array();
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GovPayNet\Message\AuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->authorize($parameters);
    }
}
