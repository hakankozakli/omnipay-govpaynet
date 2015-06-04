<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructVoidPaymentResponse
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructVoidPaymentResponse originally named VoidPaymentResponse
 * Documentation : Both successful and unsuccessful void payment requests will have a response message of this type. In order to determine whether or not the void payment was successful see the code element.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructVoidPaymentResponse extends WsdlClass
{
    /**
     * The transactionReferenceId
     * Meta informations extracted from the WSDL
     * - documentation : This reference identifier (id) of the voided transaction.
     * - minOccurs : 0
     * - documentation : Represents a reference transaction identifier (id).
     * - maxLength : 20
     * @var string
     */
    public $transactionReferenceId;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation : The void payment response code contains additional information about the status of the payment. When determining whether or not a payment was voided use this element.
     * @var EnumVoidPaymentResponseCode
     */
    public $code;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - documentation : This element contains additional information about the status of a void payment. The message content will vary and can change at any time. This message is also not always going to be human-readable.
     * - minOccurs : 0
     * @var string
     */
    public $message;
    /**
     * Constructor method for VoidPaymentResponse
     * @see parent::__construct()
     * @param string $_transactionReferenceId
     * @param EnumVoidPaymentResponseCode $_code
     * @param string $_message
     * @return StructVoidPaymentResponse
     */
    public function __construct($_transactionReferenceId = NULL,$_code = NULL,$_message = NULL)
    {
        parent::__construct(array('transactionReferenceId'=>$_transactionReferenceId,'code'=>$_code,'message'=>$_message),false);
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
     * Get code value
     * @return EnumVoidPaymentResponseCode|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @uses EnumVoidPaymentResponseCode::valueIsValid()
     * @param EnumVoidPaymentResponseCode $_code the code
     * @return EnumVoidPaymentResponseCode
     */
    public function setCode($_code)
    {
        if(!EnumVoidPaymentResponseCode::valueIsValid($_code))
        {
            return false;
        }
        return ($this->code = $_code);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $_message the message
     * @return string
     */
    public function setMessage($_message)
    {
        return ($this->message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructVoidPaymentResponse
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
