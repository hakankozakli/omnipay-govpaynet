<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPayRequest
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPayRequest originally named PayRequest
 * Documentation : Send this message to make a payment for the entire amount provided plus the fee. Similar to the calculate fee message this request also allows for multiple amounts to be sent. When sending amounts only send the payment amounts do not add the GovPayNet fee as it will be determined at runtime based on the amounts provided automatically.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPayRequest extends WsdlClass
{
    /**
     * The plc
     * Meta informations extracted from the WSDL
     * - documentation : The PLC you would like the payment to be applied.
     * - documentation : Pay Location Code integer, must be a positive integer with at least one digit.
     * - pattern : [0-9]+
     * @var integer
     */
    public $plc;
    /**
     * The amounts
     * @var StructAmounts
     */
    public $amounts;
    /**
     * The payLocationPaymentInformation
     * @var StructPayLocationPaymentInformation
     */
    public $payLocationPaymentInformation;
    /**
     * The billingName
     * Meta informations extracted from the WSDL
     * - documentation : The card holder's name associated with the card. Exactly as it is configured with the card.
     * @var StructPersonName
     */
    public $billingName;
    /**
     * The billingAddress
     * Meta informations extracted from the WSDL
     * - documentation : The card holder's billing address associated with the card.
     * @var StructAddress
     */
    public $billingAddress;
    /**
     * The billingCard
     * Meta informations extracted from the WSDL
     * - documentation : The card data used for performing an authorization.
     * @var StructCard
     */
    public $billingCard;
    /**
     * The billingPhone
     * Meta informations extracted from the WSDL
     * - documentation : If provided this is the phone number of the card holder.
     * - minOccurs : 0
     * @var StructPhoneNumber
     */
    public $billingPhone;
    /**
     * The notifyEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation : If an email address is provided an email payment receipt summarizing the payment made upon successful authorization will be sent to the address provided.
     * - minOccurs : 0
     * - documentation : Email address, acceptable format is defined within the regular expression.
     * - pattern : [^@]+@[^\.]+\..+
     * @var string
     */
    public $notifyEmailAddress;
    /**
     * The cardHolderPresent
     * Meta informations extracted from the WSDL
     * - documentation : This is required and used for bail payments only. If specified it means that the cardholder will be present at the jail or correctional facility.
     * - minOccurs : 0
     * @var boolean
     */
    public $cardHolderPresent;
    /**
     * Constructor method for PayRequest
     * @see parent::__construct()
     * @param integer $_plc
     * @param StructAmounts $_amounts
     * @param StructPayLocationPaymentInformation $_payLocationPaymentInformation
     * @param StructPersonName $_billingName
     * @param StructAddress $_billingAddress
     * @param StructCard $_billingCard
     * @param StructPhoneNumber $_billingPhone
     * @param string $_notifyEmailAddress
     * @param boolean $_cardHolderPresent
     * @return StructPayRequest
     */
    public function __construct($_plc = NULL,$_amounts = NULL,$_payLocationPaymentInformation = NULL,$_billingName = NULL,$_billingAddress = NULL,$_billingCard = NULL,$_billingPhone = NULL,$_notifyEmailAddress = NULL,$_cardHolderPresent = NULL)
    {
        parent::__construct(array('plc'=>$_plc,'amounts'=>$_amounts,'payLocationPaymentInformation'=>$_payLocationPaymentInformation,'billingName'=>$_billingName,'billingAddress'=>$_billingAddress,'billingCard'=>$_billingCard,'billingPhone'=>$_billingPhone,'notifyEmailAddress'=>$_notifyEmailAddress,'cardHolderPresent'=>$_cardHolderPresent),false);
    }
    /**
     * Get plc value
     * @return integer|null
     */
    public function getPlc()
    {
        return $this->plc;
    }
    /**
     * Set plc value
     * @param integer $_plc the plc
     * @return integer
     */
    public function setPlc($_plc)
    {
        return ($this->plc = $_plc);
    }
    /**
     * Get amounts value
     * @return StructAmounts|null
     */
    public function getAmounts()
    {
        return $this->amounts;
    }
    /**
     * Set amounts value
     * @param StructAmounts $_amounts the amounts
     * @return StructAmounts
     */
    public function setAmounts($_amounts)
    {
        return ($this->amounts = $_amounts);
    }
    /**
     * Get payLocationPaymentInformation value
     * @return StructPayLocationPaymentInformation|null
     */
    public function getPayLocationPaymentInformation()
    {
        return $this->payLocationPaymentInformation;
    }
    /**
     * Set payLocationPaymentInformation value
     * @param StructPayLocationPaymentInformation $_payLocationPaymentInformation the payLocationPaymentInformation
     * @return StructPayLocationPaymentInformation
     */
    public function setPayLocationPaymentInformation($_payLocationPaymentInformation)
    {
        return ($this->payLocationPaymentInformation = $_payLocationPaymentInformation);
    }
    /**
     * Get billingName value
     * @return StructPersonName|null
     */
    public function getBillingName()
    {
        return $this->billingName;
    }
    /**
     * Set billingName value
     * @param StructPersonName $_billingName the billingName
     * @return StructPersonName
     */
    public function setBillingName($_billingName)
    {
        return ($this->billingName = $_billingName);
    }
    /**
     * Get billingAddress value
     * @return StructAddress|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * Set billingAddress value
     * @param StructAddress $_billingAddress the billingAddress
     * @return StructAddress
     */
    public function setBillingAddress($_billingAddress)
    {
        return ($this->billingAddress = $_billingAddress);
    }
    /**
     * Get billingCard value
     * @return StructCard|null
     */
    public function getBillingCard()
    {
        return $this->billingCard;
    }
    /**
     * Set billingCard value
     * @param StructCard $_billingCard the billingCard
     * @return StructCard
     */
    public function setBillingCard($_billingCard)
    {
        return ($this->billingCard = $_billingCard);
    }
    /**
     * Get billingPhone value
     * @return StructPhoneNumber|null
     */
    public function getBillingPhone()
    {
        return $this->billingPhone;
    }
    /**
     * Set billingPhone value
     * @param StructPhoneNumber $_billingPhone the billingPhone
     * @return StructPhoneNumber
     */
    public function setBillingPhone($_billingPhone)
    {
        return ($this->billingPhone = $_billingPhone);
    }
    /**
     * Get notifyEmailAddress value
     * @return string|null
     */
    public function getNotifyEmailAddress()
    {
        return $this->notifyEmailAddress;
    }
    /**
     * Set notifyEmailAddress value
     * @param string $_notifyEmailAddress the notifyEmailAddress
     * @return string
     */
    public function setNotifyEmailAddress($_notifyEmailAddress)
    {
        return ($this->notifyEmailAddress = $_notifyEmailAddress);
    }
    /**
     * Get cardHolderPresent value
     * @return boolean|null
     */
    public function getCardHolderPresent()
    {
        return $this->cardHolderPresent;
    }
    /**
     * Set cardHolderPresent value
     * @param boolean $_cardHolderPresent the cardHolderPresent
     * @return boolean
     */
    public function setCardHolderPresent($_cardHolderPresent)
    {
        return ($this->cardHolderPresent = $_cardHolderPresent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPayRequest
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
