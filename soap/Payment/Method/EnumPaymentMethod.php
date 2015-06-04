<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class EnumPaymentMethod
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
/**
 * This class stands for EnumPaymentMethod originally named PaymentMethod
 * Documentation : All supported payment methods are contained within this element.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
class EnumPaymentMethod extends WsdlClass
{
    /**
     * Constant for value 'CREDIT'
     * Meta informations extracted from the WSDL
     * - documentation : Credit Card Payment
     * @return string 'CREDIT'
     */
    const VALUE_CREDIT = 'CREDIT';
    /**
     * Constant for value 'DEBIT'
     * Meta informations extracted from the WSDL
     * - documentation : Debit Card Payment
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT = 'DEBIT';
    /**
     * Return true if value is allowed
     * @uses EnumPaymentMethod::VALUE_CREDIT
     * @uses EnumPaymentMethod::VALUE_DEBIT
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(EnumPaymentMethod::VALUE_CREDIT,EnumPaymentMethod::VALUE_DEBIT));
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
