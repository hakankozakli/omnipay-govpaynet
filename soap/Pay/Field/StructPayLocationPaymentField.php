<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPayLocationPaymentField
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPayLocationPaymentField originally named PayLocationPaymentField
 * Documentation : Each PLC contains specific/custom information and contains any number of these (PayLocationPaymentField) elements. This element contain many choices for information however, only one of them should be set.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPayLocationPaymentField extends WsdlClass
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation : The name of the payment field. This must be exactly the same as was provided during PLC configuration. This is case insensitive.
     * @var string
     */
    public $name;
    /**
     * The value
     * @var StructValue
     */
    public $value;
    /**
     * Constructor method for PayLocationPaymentField
     * @see parent::__construct()
     * @param string $_name
     * @param StructValue $_value
     * @return StructPayLocationPaymentField
     */
    public function __construct($_name = NULL,$_value = NULL)
    {
        parent::__construct(array('name'=>$_name,'value'=>$_value),false);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get value value
     * @return StructValue|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param StructValue $_value the value
     * @return StructValue
     */
    public function setValue($_value)
    {
        return ($this->value = $_value);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPayLocationPaymentField
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
