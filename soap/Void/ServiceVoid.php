<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class ServiceVoid
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
/**
 * This class stands for ServiceVoid originally named Void
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
class ServiceVoid extends WsdlClass
{
    /**
     * Method to call the operation originally named VoidPayment
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructVoidPaymentRequest $_structVoidPaymentRequest
     * @return StructVoidPaymentResponse
     */
    public function VoidPayment(StructVoidPaymentRequest $_structVoidPaymentRequest)
    {
        try
        {
            return $this->setResult(new StructVoidPaymentResponse(self::getSoapClient()->VoidPayment($_structVoidPaymentRequest)));
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
     * @return StructVoidPaymentResponse
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
