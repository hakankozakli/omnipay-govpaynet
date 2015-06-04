<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class EnumCardType
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
/**
 * This class stands for EnumCardType originally named CardType
 * Documentation : The credit or debit card types supported by GovPayNet.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
class EnumCardType extends WsdlClass
{
    /**
     * Constant for value 'AX'
     * Meta informations extracted from the WSDL
     * - documentation : American Express
     * @return string 'AX'
     */
    const VALUE_AX = 'AX';
    /**
     * Constant for value 'DI'
     * Meta informations extracted from the WSDL
     * - documentation : Discover
     * @return string 'DI'
     */
    const VALUE_DI = 'DI';
    /**
     * Constant for value 'MC'
     * Meta informations extracted from the WSDL
     * - documentation : MasterCard
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'VI'
     * Meta informations extracted from the WSDL
     * - documentation : Visa
     * @return string 'VI'
     */
    const VALUE_VI = 'VI';
    /**
     * Return true if value is allowed
     * @uses EnumCardType::VALUE_AX
     * @uses EnumCardType::VALUE_DI
     * @uses EnumCardType::VALUE_MC
     * @uses EnumCardType::VALUE_VI
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(EnumCardType::VALUE_AX,EnumCardType::VALUE_DI,EnumCardType::VALUE_MC,EnumCardType::VALUE_VI));
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
