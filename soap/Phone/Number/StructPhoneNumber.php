<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructPhoneNumber
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructPhoneNumber originally named PhoneNumber
 * Documentation : Phone number is flexible in the contents but requires at least the following elements. An area code is the first three digits of a phone number. The prefix is the next three digits and finally the suffix are the last four digits of a phone number. i.e.: 000 000 0000
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructPhoneNumber extends WsdlClass
{
    /**
     * The areaCode
     * Meta informations extracted from the WSDL
     * - documentation : First three digits of a phone number.
     * - documentation : A string that does not allow leading or trailing whitespace.
     * - pattern : \S?|\S.*\S
     * @var string
     */
    public $areaCode;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - documentation : Starting at the fourth digit to the sixth digit this phone number prefix.
     * - documentation : A string that does not allow leading or trailing whitespace.
     * - pattern : \S?|\S.*\S
     * @var string
     */
    public $prefix;
    /**
     * The suffix
     * Meta informations extracted from the WSDL
     * - documentation : From the seventh digit to the tenth digit this is the phone number suffix.
     * - documentation : A string that does not allow leading or trailing whitespace.
     * - pattern : \S?|\S.*\S
     * @var string
     */
    public $suffix;
    /**
     * Constructor method for PhoneNumber
     * @see parent::__construct()
     * @param string $_areaCode
     * @param string $_prefix
     * @param string $_suffix
     * @return StructPhoneNumber
     */
    public function __construct($_areaCode = NULL,$_prefix = NULL,$_suffix = NULL)
    {
        parent::__construct(array('areaCode'=>$_areaCode,'prefix'=>$_prefix,'suffix'=>$_suffix),false);
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $_areaCode the areaCode
     * @return string
     */
    public function setAreaCode($_areaCode)
    {
        return ($this->areaCode = $_areaCode);
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $_prefix the prefix
     * @return string
     */
    public function setPrefix($_prefix)
    {
        return ($this->prefix = $_prefix);
    }
    /**
     * Get suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
    /**
     * Set suffix value
     * @param string $_suffix the suffix
     * @return string
     */
    public function setSuffix($_suffix)
    {
        return ($this->suffix = $_suffix);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructPhoneNumber
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
