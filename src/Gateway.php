<?php namespace Omnipay\GovPayNet;

use Omnipay\Common\AbstractGateway;

/**
 * @package    Omnipay\GovPayNet
 *
 * @copyright  Flexcoders Ltd
 *
 * @author     Luke Steadman <ljsteadman@gmail.com>
 * @author     FlexCoders Ltd, London, UK
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'GovPayNet';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'plc' => '9995',
            'username' => 'gpsdemo',
            'password' => 'L0GwsdUFhj8b7awF4QHc'
        );
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPlc($value)
    {
        $this->setParameter('plc', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlc()
    {
        return $this->getParameter('plc');
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
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GovPayNet\Message\ChargeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\GovPayNet\Message\PayRequest', $parameters);
    }
}
