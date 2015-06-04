<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructInternationalAddress
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructInternationalAddress originally named InternationalAddress
 * Documentation : Models an address outside of the United States of America. State is used loosely as it also represents Canadian provinces.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructInternationalAddress extends StructAddress
{
    /**
     * The country
     * @var EnumCountry
     */
    public $country;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - documentation : States and Canadian Provinces
     * - minOccurs : 0
     * @var EnumState
     */
    public $state;
    /**
     * Constructor method for InternationalAddress
     * @see parent::__construct()
     * @param EnumCountry $_country
     * @param EnumState $_state
     * @return StructInternationalAddress
     */
    public function __construct($_country = NULL,$_state = NULL)
    {
        WsdlClass::__construct(array('country'=>$_country,'state'=>$_state),false);
    }
    /**
     * Get country value
     * @return EnumCountry|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @uses EnumCountry::valueIsValid()
     * @param EnumCountry $_country the country
     * @return EnumCountry
     */
    public function setCountry($_country)
    {
        if(!EnumCountry::valueIsValid($_country))
        {
            return false;
        }
        return ($this->country = $_country);
    }
    /**
     * Get state value
     * @return EnumState|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @uses EnumState::valueIsValid()
     * @param EnumState $_state the state
     * @return EnumState
     */
    public function setState($_state)
    {
        if(!EnumState::valueIsValid($_state))
        {
            return false;
        }
        return ($this->state = $_state);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructInternationalAddress
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
