<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructUSAddress
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructUSAddress originally named USAddress
 * Documentation : Models an address within the United States of America.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructUSAddress extends StructAddress
{
    /**
     * The state
     * @var EnumState
     */
    public $state;
    /**
     * Constructor method for USAddress
     * @see parent::__construct()
     * @param EnumState $_state
     * @return StructUSAddress
     */
    public function __construct($_state = NULL)
    {
        WsdlClass::__construct(array('state'=>$_state),false);
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
     * @return StructUSAddress
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
