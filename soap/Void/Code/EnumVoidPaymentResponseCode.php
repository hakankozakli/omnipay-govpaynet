<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class EnumVoidPaymentResponseCode
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
/**
 * This class stands for EnumVoidPaymentResponseCode originally named VoidPaymentResponseCode
 * Documentation : Each void payment response will be 'coded' to ease API integration with the GovPayNet payment processor.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
class EnumVoidPaymentResponseCode extends WsdlClass
{
    /**
     * Constant for value 'VOID-0'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal successful
     * @return string 'VOID-0'
     */
    const VALUE_VOID_0 = 'VOID-0';
    /**
     * Constant for value 'VOID-100'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal gateway unavailable. Please contact GPS support.
     * @return string 'VOID-100'
     */
    const VALUE_VOID_100 = 'VOID-100';
    /**
     * Constant for value 'VOID-101'
     * Meta informations extracted from the WSDL
     * - documentation : Internal server error, please contact GPS support.
     * @return string 'VOID-101'
     */
    const VALUE_VOID_101 = 'VOID-101';
    /**
     * Constant for value 'VOID-200'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Unable to connect to payment processor, please try again. If this continues contact GPS support.
     * @return string 'VOID-200'
     */
    const VALUE_VOID_200 = 'VOID-200';
    /**
     * Constant for value 'VOID-201'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Payment processor was unable to reverse payment.
     * @return string 'VOID-201'
     */
    const VALUE_VOID_201 = 'VOID-201';
    /**
     * Constant for value 'VOID-220'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Invalid transaction Id.
     * @return string 'VOID-220'
     */
    const VALUE_VOID_220 = 'VOID-220';
    /**
     * Constant for value 'VOID-221'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Transaction has not been authorized by the payment processor.
     * @return string 'VOID-221'
     */
    const VALUE_VOID_221 = 'VOID-221';
    /**
     * Constant for value 'VOID-222'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Transaction has already been captured by the payment processor.
     * @return string 'VOID-222'
     */
    const VALUE_VOID_222 = 'VOID-222';
    /**
     * Constant for value 'VOID-223'
     * Meta informations extracted from the WSDL
     * - documentation : Payment reversal failed. Transaction is being processed by the payment processor.
     * @return string 'VOID-223'
     */
    const VALUE_VOID_223 = 'VOID-223';
    /**
     * Return true if value is allowed
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_0
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_100
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_101
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_200
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_201
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_220
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_221
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_222
     * @uses EnumVoidPaymentResponseCode::VALUE_VOID_223
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(EnumVoidPaymentResponseCode::VALUE_VOID_0,EnumVoidPaymentResponseCode::VALUE_VOID_100,EnumVoidPaymentResponseCode::VALUE_VOID_101,EnumVoidPaymentResponseCode::VALUE_VOID_200,EnumVoidPaymentResponseCode::VALUE_VOID_201,EnumVoidPaymentResponseCode::VALUE_VOID_220,EnumVoidPaymentResponseCode::VALUE_VOID_221,EnumVoidPaymentResponseCode::VALUE_VOID_222,EnumVoidPaymentResponseCode::VALUE_VOID_223));
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
