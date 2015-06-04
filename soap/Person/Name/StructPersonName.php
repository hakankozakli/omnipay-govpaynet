<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPersonName
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPersonName originally named PersonName
 * Documentation : A human/person name, this is includes an optional middle initial or middle name. The first, middle, and last names may only contain letters, numbers, spaces, forward and back slashes, dashes, commas, periods, parentheses, apostrophes, and ampersands. Also the max length of the fields are 45 characters.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPersonName extends WsdlClass
{
    /**
     * The first
     * Meta informations extracted from the WSDL
     * - documentation : First name
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - pattern : [a-zA-Z0-9%&\\\-,./()' ]{0,45}
     * @var TrimmedString
     */
    public $first;
    /**
     * The middle
     * Meta informations extracted from the WSDL
     * - documentation : Middle initial or middle name
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - pattern : [a-zA-Z0-9%&\\\-,./()' ]{0,45}
     * @var TrimmedString
     */
    public $middle;
    /**
     * The last
     * Meta informations extracted from the WSDL
     * - documentation : Last name
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - pattern : [a-zA-Z0-9%&\\\-,./()' ]{0,45}
     * @var TrimmedString
     */
    public $last;
    /**
     * Constructor method for PersonName
     * @see parent::__construct()
     * @param TrimmedString $_first
     * @param TrimmedString $_middle
     * @param TrimmedString $_last
     * @return StructPersonName
     */
    public function __construct($_first = NULL,$_middle = NULL,$_last = NULL)
    {
        parent::__construct(array('first'=>$_first,'middle'=>$_middle,'last'=>$_last),false);
    }
    /**
     * Get first value
     * @return TrimmedString|null
     */
    public function getFirst()
    {
        return $this->first;
    }
    /**
     * Set first value
     * @param TrimmedString $_first the first
     * @return TrimmedString
     */
    public function setFirst($_first)
    {
        return ($this->first = $_first);
    }
    /**
     * Get middle value
     * @return TrimmedString|null
     */
    public function getMiddle()
    {
        return $this->middle;
    }
    /**
     * Set middle value
     * @param TrimmedString $_middle the middle
     * @return TrimmedString
     */
    public function setMiddle($_middle)
    {
        return ($this->middle = $_middle);
    }
    /**
     * Get last value
     * @return TrimmedString|null
     */
    public function getLast()
    {
        return $this->last;
    }
    /**
     * Set last value
     * @param TrimmedString $_last the last
     * @return TrimmedString
     */
    public function setLast($_last)
    {
        return ($this->last = $_last);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPersonName
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
