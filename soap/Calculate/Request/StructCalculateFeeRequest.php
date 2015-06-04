<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructCalculateFeeRequest
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructCalculateFeeRequest originally named CalculateFeeRequest
 * Documentation : Calculates the GovPayNet fee. This message is useful to provide your end-users the ability to confirm the total amount being paid. This message allows for more than one amount to be sent when performing the calculation of the GovPayNet fee for example, if a PLC has two charges; parking charge and processing charge you would send two CurrencyAmount elements within the amounts element.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructCalculateFeeRequest extends WsdlClass
{
    /**
     * The plc
     * Meta informations extracted from the WSDL
     * - documentation : The PLC being used to calculate the GovPayNet fee.
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
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - documentation : The payment method chosen, this is optional and will be determined at runtime whether or not this is required. Tax payments require this to be set.
     * - minOccurs : 0
     * @var EnumPaymentMethod
     */
    public $paymentMethod;
    /**
     * The cardType
     * Meta informations extracted from the WSDL
     * - documentation : The card type chosen, this is optional and will be determined at runtime whether or not this is required. Tax payments require this to be set.
     * - minOccurs : 0
     * @var EnumCardType
     */
    public $cardType;
    /**
     * Constructor method for CalculateFeeRequest
     * @see parent::__construct()
     * @param integer $_plc
     * @param StructAmounts $_amounts
     * @param EnumPaymentMethod $_paymentMethod
     * @param EnumCardType $_cardType
     * @return StructCalculateFeeRequest
     */
    public function __construct($_plc = NULL,$_amounts = NULL,$_paymentMethod = NULL,$_cardType = NULL)
    {
        parent::__construct(array('plc'=>$_plc,'amounts'=>$_amounts,'paymentMethod'=>$_paymentMethod,'cardType'=>$_cardType),false);
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
     * Get cardType value
     * @return EnumCardType|null
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @uses EnumCardType::valueIsValid()
     * @param EnumCardType $_cardType the cardType
     * @return EnumCardType
     */
    public function setCardType($_cardType)
    {
        if(!EnumCardType::valueIsValid($_cardType))
        {
            return false;
        }
        return ($this->cardType = $_cardType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCalculateFeeRequest
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
