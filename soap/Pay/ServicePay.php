<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class ServicePay
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
/**
 * This class stands for ServicePay originally named Pay
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
class ServicePay extends WsdlClass
{
    /**
     * Method to call the operation originally named Pay
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructPayRequest $_structPayRequest
     * @return StructPayResponse
     */
    public function Pay(StructPayRequest $_structPayRequest)
    {
        try
        {
            return $this->setResult(new StructPayResponse(self::getSoapClient()->Pay($_structPayRequest)));
        }
        catch(\SoapFault $soapFault)
        {
            $this->saveLastError(__METHOD__,$soapFault);
            throw $soapFault;
        }
    }
    /**
     * Returns the result
     * @see WsdlClass::getResult()
     * @return StructPayResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
