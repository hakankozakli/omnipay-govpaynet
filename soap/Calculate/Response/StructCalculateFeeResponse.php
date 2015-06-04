<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructCalculateFeeResponse
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructCalculateFeeResponse originally named CalculateFeeResponse
 * Documentation : This is the response calculate fee returns when invoked properly. If calculate fee is invoked incorrectly you will receive a SOAPFault.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructCalculateFeeResponse extends WsdlClass
{
    /**
     * The plc
     * Meta informations extracted from the WSDL
     * - documentation : As a convenience to fee calculation clients we return the PLC that was provided.
     * - documentation : Pay Location Code integer, must be a positive integer with at least one digit.
     * - pattern : [0-9]+
     * @var integer
     */
    public $plc;
    /**
     * The feeAmount
     * Meta informations extracted from the WSDL
     * - documentation : The calculated fee amount.
     * - documentation : Decimal currency amount with up to two fraction digits.
     * - fractionDigits : 2
     * - minInclusive : 0
     * @var decimal
     */
    public $feeAmount;
    /**
     * The totalAmount
     * Meta informations extracted from the WSDL
     * - documentation : As a convenience to fee calculation clients we return the summation of all amounts provided and the fee amount.
     * - documentation : Decimal currency amount with up to two fraction digits.
     * - fractionDigits : 2
     * - minInclusive : 0
     * @var decimal
     */
    public $totalAmount;
    /**
     * Constructor method for CalculateFeeResponse
     * @see parent::__construct()
     * @param integer $_plc
     * @param decimal $_feeAmount
     * @param decimal $_totalAmount
     * @return StructCalculateFeeResponse
     */
    public function __construct($_plc = NULL,$_feeAmount = NULL,$_totalAmount = NULL)
    {
        parent::__construct(array('plc'=>$_plc,'feeAmount'=>$_feeAmount,'totalAmount'=>$_totalAmount),false);
    }
    /**
     * Get plc value
     * @return integer|null
     */
    public function getPlc()
    {
        return $this->plc;
    }
    /**
     * Set plc value
     * @param integer $_plc the plc
     * @return integer
     */
    public function setPlc($_plc)
    {
        return ($this->plc = $_plc);
    }
    /**
     * Get feeAmount value
     * @return decimal|null
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param decimal $_feeAmount the feeAmount
     * @return decimal
     */
    public function setFeeAmount($_feeAmount)
    {
        return ($this->feeAmount = $_feeAmount);
    }
    /**
     * Get totalAmount value
     * @return decimal|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param decimal $_totalAmount the totalAmount
     * @return decimal
     */
    public function setTotalAmount($_totalAmount)
    {
        return ($this->totalAmount = $_totalAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCalculateFeeResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
