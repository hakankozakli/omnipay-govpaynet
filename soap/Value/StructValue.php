<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class StructValue
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
/**
 * This class stands for StructValue originally named value
 * Documentation : Only one of the following choices should contain data.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Structs
 * @date 2015-06-04
 */
class StructValue extends WsdlClass
{
    /**
     * The address
     * @var StructPayLocationPaymentFieldUSAddress
     */
    public $address;
    /**
     * The name
     * @var StructPersonName
     */
    public $name;
    /**
     * The defendant
     * @var StructPersonName
     */
    public $defendant;
    /**
     * The date
     * @var date
     */
    public $date;
    /**
     * The phoneNumber
     * @var StructPhoneNumber
     */
    public $phoneNumber;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - documentation : Decimal currency amount with up to two fraction digits.
     * - fractionDigits : 2
     * - minInclusive : 0
     * @var decimal
     */
    public $price;
    /**
     * The authorization
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $authorization;
    /**
     * The relationship
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $relationship;
    /**
     * The textfield
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $textfield;
    /**
     * The alphanum
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $alphanum;
    /**
     * The numbers
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $numbers;
    /**
     * The textarea
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $textarea;
    /**
     * The dropdown
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $dropdown;
    /**
     * The checkbox
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $checkbox;
    /**
     * The choice
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $choice;
    /**
     * The facility
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $facility;
    /**
     * The prescreen
     * Meta informations extracted from the WSDL
     * - documentation : PLC payment field used to collect a single piece of payment information in a generic manner.
     * - maxLength : 255
     * @var TrimmedString
     */
    public $prescreen;
    /**
     * Constructor method for value
     * @see parent::__construct()
     * @param StructPayLocationPaymentFieldUSAddress $_address
     * @param StructPersonName $_name
     * @param StructPersonName $_defendant
     * @param date $_date
     * @param StructPhoneNumber $_phoneNumber
     * @param decimal $_price
     * @param TrimmedString $_authorization
     * @param TrimmedString $_relationship
     * @param TrimmedString $_textfield
     * @param TrimmedString $_alphanum
     * @param TrimmedString $_numbers
     * @param TrimmedString $_textarea
     * @param TrimmedString $_dropdown
     * @param TrimmedString $_checkbox
     * @param TrimmedString $_choice
     * @param TrimmedString $_facility
     * @param TrimmedString $_prescreen
     * @return StructValue
     */
    public function __construct($_address = NULL,$_name = NULL,$_defendant = NULL,$_date = NULL,$_phoneNumber = NULL,$_price = NULL,$_authorization = NULL,$_relationship = NULL,$_textfield = NULL,$_alphanum = NULL,$_numbers = NULL,$_textarea = NULL,$_dropdown = NULL,$_checkbox = NULL,$_choice = NULL,$_facility = NULL,$_prescreen = NULL)
    {
        parent::__construct(array('address'=>$_address,'name'=>$_name,'defendant'=>$_defendant,'date'=>$_date,'phoneNumber'=>$_phoneNumber,'price'=>$_price,'authorization'=>$_authorization,'relationship'=>$_relationship,'textfield'=>$_textfield,'alphanum'=>$_alphanum,'numbers'=>$_numbers,'textarea'=>$_textarea,'dropdown'=>$_dropdown,'checkbox'=>$_checkbox,'choice'=>$_choice,'facility'=>$_facility,'prescreen'=>$_prescreen),false);
    }
    /**
     * Get address value
     * @return StructPayLocationPaymentFieldUSAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param StructPayLocationPaymentFieldUSAddress $_address the address
     * @return StructPayLocationPaymentFieldUSAddress
     */
    public function setAddress($_address)
    {
        return ($this->address = $_address);
    }
    /**
     * Get name value
     * @return StructPersonName|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param StructPersonName $_name the name
     * @return StructPersonName
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get defendant value
     * @return StructPersonName|null
     */
    public function getDefendant()
    {
        return $this->defendant;
    }
    /**
     * Set defendant value
     * @param StructPersonName $_defendant the defendant
     * @return StructPersonName
     */
    public function setDefendant($_defendant)
    {
        return ($this->defendant = $_defendant);
    }
    /**
     * Get date value
     * @return date|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param date $_date the date
     * @return date
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get phoneNumber value
     * @return StructPhoneNumber|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param StructPhoneNumber $_phoneNumber the phoneNumber
     * @return StructPhoneNumber
     */
    public function setPhoneNumber($_phoneNumber)
    {
        return ($this->phoneNumber = $_phoneNumber);
    }
    /**
     * Get price value
     * @return decimal|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param decimal $_price the price
     * @return decimal
     */
    public function setPrice($_price)
    {
        return ($this->price = $_price);
    }
    /**
     * Get authorization value
     * @return TrimmedString|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }
    /**
     * Set authorization value
     * @param TrimmedString $_authorization the authorization
     * @return TrimmedString
     */
    public function setAuthorization($_authorization)
    {
        return ($this->authorization = $_authorization);
    }
    /**
     * Get relationship value
     * @return TrimmedString|null
     */
    public function getRelationship()
    {
        return $this->relationship;
    }
    /**
     * Set relationship value
     * @param TrimmedString $_relationship the relationship
     * @return TrimmedString
     */
    public function setRelationship($_relationship)
    {
        return ($this->relationship = $_relationship);
    }
    /**
     * Get textfield value
     * @return TrimmedString|null
     */
    public function getTextfield()
    {
        return $this->textfield;
    }
    /**
     * Set textfield value
     * @param TrimmedString $_textfield the textfield
     * @return TrimmedString
     */
    public function setTextfield($_textfield)
    {
        return ($this->textfield = $_textfield);
    }
    /**
     * Get alphanum value
     * @return TrimmedString|null
     */
    public function getAlphanum()
    {
        return $this->alphanum;
    }
    /**
     * Set alphanum value
     * @param TrimmedString $_alphanum the alphanum
     * @return TrimmedString
     */
    public function setAlphanum($_alphanum)
    {
        return ($this->alphanum = $_alphanum);
    }
    /**
     * Get numbers value
     * @return TrimmedString|null
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
    /**
     * Set numbers value
     * @param TrimmedString $_numbers the numbers
     * @return TrimmedString
     */
    public function setNumbers($_numbers)
    {
        return ($this->numbers = $_numbers);
    }
    /**
     * Get textarea value
     * @return TrimmedString|null
     */
    public function getTextarea()
    {
        return $this->textarea;
    }
    /**
     * Set textarea value
     * @param TrimmedString $_textarea the textarea
     * @return TrimmedString
     */
    public function setTextarea($_textarea)
    {
        return ($this->textarea = $_textarea);
    }
    /**
     * Get dropdown value
     * @return TrimmedString|null
     */
    public function getDropdown()
    {
        return $this->dropdown;
    }
    /**
     * Set dropdown value
     * @param TrimmedString $_dropdown the dropdown
     * @return TrimmedString
     */
    public function setDropdown($_dropdown)
    {
        return ($this->dropdown = $_dropdown);
    }
    /**
     * Get checkbox value
     * @return TrimmedString|null
     */
    public function getCheckbox()
    {
        return $this->checkbox;
    }
    /**
     * Set checkbox value
     * @param TrimmedString $_checkbox the checkbox
     * @return TrimmedString
     */
    public function setCheckbox($_checkbox)
    {
        return ($this->checkbox = $_checkbox);
    }
    /**
     * Get choice value
     * @return TrimmedString|null
     */
    public function getChoice()
    {
        return $this->choice;
    }
    /**
     * Set choice value
     * @param TrimmedString $_choice the choice
     * @return TrimmedString
     */
    public function setChoice($_choice)
    {
        return ($this->choice = $_choice);
    }
    /**
     * Get facility value
     * @return TrimmedString|null
     */
    public function getFacility()
    {
        return $this->facility;
    }
    /**
     * Set facility value
     * @param TrimmedString $_facility the facility
     * @return TrimmedString
     */
    public function setFacility($_facility)
    {
        return ($this->facility = $_facility);
    }
    /**
     * Get prescreen value
     * @return TrimmedString|null
     */
    public function getPrescreen()
    {
        return $this->prescreen;
    }
    /**
     * Set prescreen value
     * @param TrimmedString $_prescreen the prescreen
     * @return TrimmedString
     */
    public function setPrescreen($_prescreen)
    {
        return ($this->prescreen = $_prescreen);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructValue
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
