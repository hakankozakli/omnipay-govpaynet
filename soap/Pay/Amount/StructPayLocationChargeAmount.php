<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPayLocationChargeAmount
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPayLocationChargeAmount originally named PayLocationChargeAmount
 * Documentation : This element models a charge, each payment can contain up to four charges. For example, a PLC contains three charges; administration charge, booking charge, and lodging charge. If a payment is made for this particular PLC then there would be three charges each with their own amount and amount identifier (id) starting at one through three in order. The id determines which charge is applied. Not all charges are required so it is legitimate to skip an id, if you only want to send a subset of charges, just make sure that the id of each charge matches correctly with the corresponding charge provided during PLC configuration. For example, if I had four charges; bail charge, administration charge, booking charge, and lodging charge. The id mapping would be: bail charge = 1, administration charge = 2, booking charge = 3, and lodging charge = 4.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPayLocationChargeAmount extends WsdlClass
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - minInclusive : .01
     * @var CurrencyAmount
     */
    public $amount;
    /**
     * The amountId
     * Meta informations extracted from the WSDL
     * - documentation : Identifier for each charge. This must correlate with a charge based on the order provided during PLC configuration.
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - minInclusive : 1
     * @var integer
     */
    public $amountId;
    /**
     * Constructor method for PayLocationChargeAmount
     * @see parent::__construct()
     * @param CurrencyAmount $_amount
     * @param integer $_amountId
     * @return StructPayLocationChargeAmount
     */
    public function __construct($_amount = NULL,$_amountId = NULL)
    {
        parent::__construct(array('amount'=>$_amount,'amountId'=>$_amountId),false);
    }
    /**
     * Get amount value
     * @return CurrencyAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param CurrencyAmount $_amount the amount
     * @return CurrencyAmount
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get amountId value
     * @return integer|null
     */
    public function getAmountId()
    {
        return $this->amountId;
    }
    /**
     * Set amountId value
     * @param integer $_amountId the amountId
     * @return integer
     */
    public function setAmountId($_amountId)
    {
        return ($this->amountId = $_amountId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPayLocationChargeAmount
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
