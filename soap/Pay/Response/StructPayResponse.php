<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPayResponse
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPayResponse originally named PayResponse
 * Documentation : Both successful and unsuccessful authorization requests will have a response message of this type. In order to determine whether or not the payment was successful see the code element and its possible values.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPayResponse extends WsdlClass
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation : The payment response code contains additional information about the status of a payment. When determining whether or not a payment was successful or unsuccessful use this element.
     * @var EnumPaymentResponseCode
     */
    public $code;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - documentation : This element contains additional information about the status of a payment. The message content will vary and can change at any time. This message is also not always going to be human-readable.
     * - minOccurs : 0
     * @var string
     */
    public $message;
    /**
     * The transactionReferenceId
     * Meta informations extracted from the WSDL
     * - documentation : This reference identifier (id) is useful to track the status of a payment. The reference is unique within the GovPayNet payment systems. In general clients will receive this id when making a payment however, if the request was invalid (meaning that it did not include all required or included invalid data) or the payment processing gateway is unavailable you will not receive the id under those circumstances.
     * - minOccurs : 0
     * - documentation : Represents a reference transaction identifier (id).
     * - maxLength : 20
     * @var string
     */
    public $transactionReferenceId;
    /**
     * The cardAuthCode
     * Meta informations extracted from the WSDL
     * - documentation : The card authorization code is provided by the payment gateway as a unique number to identify the transaction.
     * - minOccurs : 0
     * @var string
     */
    public $cardAuthCode;
    /**
     * The amountAuthorized
     * Meta informations extracted from the WSDL
     * - documentation : The total amount authorized including the GovPayNet fee if the authorization was attempted.
     * - minOccurs : 0
     * - documentation : Decimal currency amount with up to two fraction digits.
     * - fractionDigits : 2
     * - minInclusive : 0
     * @var decimal
     */
    public $amountAuthorized;
    /**
     * Constructor method for PayResponse
     * @see parent::__construct()
     * @param EnumPaymentResponseCode $_code
     * @param string $_message
     * @param string $_transactionReferenceId
     * @param string $_cardAuthCode
     * @param decimal $_amountAuthorized
     * @return StructPayResponse
     */
    public function __construct($_code = NULL,$_message = NULL,$_transactionReferenceId = NULL,$_cardAuthCode = NULL,$_amountAuthorized = NULL)
    {
        parent::__construct(array('code'=>$_code,'message'=>$_message,'transactionReferenceId'=>$_transactionReferenceId,'cardAuthCode'=>$_cardAuthCode,'amountAuthorized'=>$_amountAuthorized),false);
    }
    /**
     * Get code value
     * @return EnumPaymentResponseCode|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @uses EnumPaymentResponseCode::valueIsValid()
     * @param EnumPaymentResponseCode $_code the code
     * @return EnumPaymentResponseCode
     */
    public function setCode($_code)
    {
        if(!EnumPaymentResponseCode::valueIsValid($_code))
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
     * Get cardAuthCode value
     * @return string|null
     */
    public function getCardAuthCode()
    {
        return $this->cardAuthCode;
    }
    /**
     * Set cardAuthCode value
     * @param string $_cardAuthCode the cardAuthCode
     * @return string
     */
    public function setCardAuthCode($_cardAuthCode)
    {
        return ($this->cardAuthCode = $_cardAuthCode);
    }
    /**
     * Get amountAuthorized value
     * @return decimal|null
     */
    public function getAmountAuthorized()
    {
        return $this->amountAuthorized;
    }
    /**
     * Set amountAuthorized value
     * @param decimal $_amountAuthorized the amountAuthorized
     * @return decimal
     */
    public function setAmountAuthorized($_amountAuthorized)
    {
        return ($this->amountAuthorized = $_amountAuthorized);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPayResponse
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
