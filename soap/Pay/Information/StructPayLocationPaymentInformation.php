<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPayLocationPaymentInformation
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPayLocationPaymentInformation originally named payLocationPaymentInformation
 * Documentation : Each PLC collects information about its customers with every payment. This element is specifically for this purpose. Data are required based on the PLC's configuration. Order is not important but the name of individual fields provided must match the fields provided when the PLC was configured. There can be any number of these associated with and provided per payment and PLC.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPayLocationPaymentInformation extends WsdlClass
{
    /**
     * The fields
     * @var StructFields
     */
    public $fields;
    /**
     * Constructor method for payLocationPaymentInformation
     * @see parent::__construct()
     * @param StructFields $_fields
     * @return StructPayLocationPaymentInformation
     */
    public function __construct($_fields = NULL)
    {
        parent::__construct(array('fields'=>$_fields),false);
    }
    /**
     * Get fields value
     * @return StructFields|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param StructFields $_fields the fields
     * @return StructFields
     */
    public function setFields($_fields)
    {
        return ($this->fields = $_fields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPayLocationPaymentInformation
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
