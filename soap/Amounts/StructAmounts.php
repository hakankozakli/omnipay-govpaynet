<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructAmounts
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructAmounts originally named amounts
 * Documentation : Each PLC is allowed to have more than one amount collected within a payment. You must specify at least one amount in order to calculate the GovPayNet fee. Each PLC is allowed to have more than one amount collected within a payment. You must specify at least one amount in order to make a payment. The summation of amounts and fee cannot exceed the maximum amount specified during PLC configuration.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructAmounts extends WsdlClass
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 4
     * @var StructPayLocationChargeAmount
     */
    public $amount;
    /**
     * Constructor method for amounts
     * @see parent::__construct()
     * @param StructPayLocationChargeAmount $_amount
     * @return StructAmounts
     */
    public function __construct($_amount = NULL)
    {
        parent::__construct(array('amount'=>$_amount),false);
    }
    /**
     * Get amount value
     * @return StructPayLocationChargeAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param StructPayLocationChargeAmount $_amount the amount
     * @return StructPayLocationChargeAmount
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructAmounts
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
