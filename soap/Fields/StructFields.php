<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructFields
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructFields originally named fields
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructFields extends WsdlClass
{
    /**
     * The field
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * @var StructPayLocationPaymentField
     */
    public $field;
    /**
     * Constructor method for fields
     * @see parent::__construct()
     * @param StructPayLocationPaymentField $_field
     * @return StructFields
     */
    public function __construct($_field = NULL)
    {
        parent::__construct(array('field'=>$_field),false);
    }
    /**
     * Get field value
     * @return StructPayLocationPaymentField|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param StructPayLocationPaymentField $_field the field
     * @return StructPayLocationPaymentField
     */
    public function setField($_field)
    {
        return ($this->field = $_field);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructFields
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
