<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructVoidPaymentRequest
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructVoidPaymentRequest originally named VoidPaymentRequest
 * Documentation : Send this message to void a payment. This process will only work if the payment has been authorized and not captured by payment processor. See the reponse codes for more information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructVoidPaymentRequest extends WsdlClass
{
    /**
     * The transactionReferenceId
     * Meta informations extracted from the WSDL
     * - documentation : This reference identifier (id) should correlate to the transaction that you wish to void.
     * - documentation : Represents a reference transaction identifier (id).
     * - maxLength : 20
     * @var string
     */
    public $transactionReferenceId;
    /**
     * Constructor method for VoidPaymentRequest
     * @see parent::__construct()
     * @param string $_transactionReferenceId
     * @return StructVoidPaymentRequest
     */
    public function __construct($_transactionReferenceId = NULL)
    {
        parent::__construct(array('transactionReferenceId'=>$_transactionReferenceId),false);
    }
    /**
     * Get transactionReferenceId value
     * @return string|null
     */
    public function getTransactionReferenceId()
    {
        return $this->transactionReferenceId;
    }
    /**
     * Set transactionReferenceId value
     * @param string $_transactionReferenceId the transactionReferenceId
     * @return string
     */
    public function setTransactionReferenceId($_transactionReferenceId)
    {
        return ($this->transactionReferenceId = $_transactionReferenceId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructVoidPaymentRequest
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
