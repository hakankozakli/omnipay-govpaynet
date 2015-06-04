<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructAddress
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructAddress originally named Address
 * Documentation : Abstract base address used for extension.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructAddress extends WsdlClass
{
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - documentation : The number and street name portions of an address.
     * - maxLength : 35
     * @var TrimmedString
     */
    public $street;
    /**
     * The street2
     * Meta informations extracted from the WSDL
     * - documentation : If there is not enough space within the street element you may use this element to provide additional street data.
     * - minOccurs : 0
     * - documentation : The number and street name portions of an address.
     * - maxLength : 35
     * @var TrimmedString
     */
    public $street2;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - maxLength : 35
     * @var TrimmedString
     */
    public $city;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - documentation : Zip code format is flexible in order to accommodate international addresses. Hyphens are allowed for zip codes in this format: 00000-0000.
     * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
     * - maxLength : 10
     * @var TrimmedString
     */
    public $zip;
    /**
     * Constructor method for Address
     * @see parent::__construct()
     * @param TrimmedString $_street
     * @param TrimmedString $_street2
     * @param TrimmedString $_city
     * @param TrimmedString $_zip
     * @return StructAddress
     */
    public function __construct($_street = NULL,$_street2 = NULL,$_city = NULL,$_zip = NULL)
    {
        parent::__construct(array('street'=>$_street,'street2'=>$_street2,'city'=>$_city,'zip'=>$_zip),false);
    }
    /**
     * Get street value
     * @return TrimmedString|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param TrimmedString $_street the street
     * @return TrimmedString
     */
    public function setStreet($_street)
    {
        return ($this->street = $_street);
    }
    /**
     * Get street2 value
     * @return TrimmedString|null
     */
    public function getStreet2()
    {
        return $this->street2;
    }
    /**
     * Set street2 value
     * @param TrimmedString $_street2 the street2
     * @return TrimmedString
     */
    public function setStreet2($_street2)
    {
        return ($this->street2 = $_street2);
    }
    /**
     * Get city value
     * @return TrimmedString|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param TrimmedString $_city the city
     * @return TrimmedString
     */
    public function setCity($_city)
    {
        return ($this->city = $_city);
    }
    /**
     * Get zip value
     * @return TrimmedString|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param TrimmedString $_zip the zip
     * @return TrimmedString
     */
    public function setZip($_zip)
    {
        return ($this->zip = $_zip);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructAddress
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
