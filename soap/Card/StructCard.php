<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructCard
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructCard originally named Card
 * Documentation : A credit or debit card which can be determined based on the payment method.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructCard extends WsdlClass
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation : The type of card being used, the card type and card must match correctly.
     * @var EnumCardType
     */
    public $type;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - documentation : The card number
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - pattern : \d{13,25}
     * @var string
     */
    public $number;
    /**
     * The securityCode
     * Meta informations extracted from the WSDL
     * - documentation : CVV or card verification code, typically three to four digits.
     * @var string
     */
    public $securityCode;
    /**
     * The expiration
     * Meta informations extracted from the WSDL
     * - documentation : Card expiration date. The format of this field is monthyear which is two digits for each: MMYY. For example January 2020 would be: 0120
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - pattern : \d{4}
     * @var string
     */
    public $expiration;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - documentation : If specified this distingushes between a credit or debit card payment.
     * - minOccurs : 0
     * @var EnumPaymentMethod
     */
    public $paymentMethod;
    /**
     * Constructor method for Card
     * @see parent::__construct()
     * @param EnumCardType $_type
     * @param string $_number
     * @param string $_securityCode
     * @param string $_expiration
     * @param EnumPaymentMethod $_paymentMethod
     * @return StructCard
     */
    public function __construct($_type = NULL,$_number = NULL,$_securityCode = NULL,$_expiration = NULL,$_paymentMethod = NULL)
    {
        parent::__construct(array('type'=>$_type,'number'=>$_number,'securityCode'=>$_securityCode,'expiration'=>$_expiration,'paymentMethod'=>$_paymentMethod),false);
    }
    /**
     * Get type value
     * @return EnumCardType|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses EnumCardType::valueIsValid()
     * @param EnumCardType $_type the type
     * @return EnumCardType
     */
    public function setType($_type)
    {
        if(!EnumCardType::valueIsValid($_type))
        {
            return false;
        }
        return ($this->type = $_type);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $_number the number
     * @return string
     */
    public function setNumber($_number)
    {
        return ($this->number = $_number);
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $_securityCode the securityCode
     * @return string
     */
    public function setSecurityCode($_securityCode)
    {
        return ($this->securityCode = $_securityCode);
    }
    /**
     * Get expiration value
     * @return string|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
    /**
     * Set expiration value
     * @param string $_expiration the expiration
     * @return string
     */
    public function setExpiration($_expiration)
    {
        return ($this->expiration = $_expiration);
    }
    /**
     * Get paymentMethod value
     * @return EnumPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @uses EnumPaymentMethod::valueIsValid()
     * @param EnumPaymentMethod $_paymentMethod the paymentMethod
     * @return EnumPaymentMethod
     */
    public function setPaymentMethod($_paymentMethod)
    {
        if(!EnumPaymentMethod::valueIsValid($_paymentMethod))
        {
            return false;
        }
        return ($this->paymentMethod = $_paymentMethod);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCard
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
