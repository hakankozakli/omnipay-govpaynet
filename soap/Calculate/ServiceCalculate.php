<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class ServiceCalculate
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
/**
 * This class stands for ServiceCalculate originally named Calculate
 * @package Flexcoders\GovPayNet
 * @subpackage Services
 * @date 2015-06-04
 */
class ServiceCalculate extends WsdlClass
{
    /**
     * Method to call the operation originally named CalculateFee
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructCalculateFeeRequest $_structCalculateFeeRequest
     * @return StructCalculateFeeResponse
     */
    public function CalculateFee(StructCalculateFeeRequest $_structCalculateFeeRequest)
    {
        try
        {
            return $this->setResult(new StructCalculateFeeResponse(self::getSoapClient()->CalculateFee($_structCalculateFeeRequest)));
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
     * @return StructCalculateFeeResponse
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
