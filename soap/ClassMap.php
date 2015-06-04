<?php
/**
 * File for the class which returns the class map definition
 * @package Flexcoders\GovPayNet
 * @date 2015-06-04
 */
/**
 * Class which returns the class map definition by the static method Flexcoders\GovPayNet\ClassMap::classMap()
 * @package Flexcoders\GovPayNet
 * @date 2015-06-04
 */
namespace Flexcoders\GovPayNet;

class ClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    public static function classMap()
    {
        return array (
            'Address' => 'Flexcoders\\GovPayNet\\StructAddress',
            'CalculateFeeRequest' => 'Flexcoders\\GovPayNet\\StructCalculateFeeRequest',
            'CalculateFeeResponse' => 'Flexcoders\\GovPayNet\\StructCalculateFeeResponse',
            'Card' => 'Flexcoders\\GovPayNet\\StructCard',
            'CardType' => 'Flexcoders\\GovPayNet\\EnumCardType',
            'Country' => 'Flexcoders\\GovPayNet\\EnumCountry',
            'InternationalAddress' => 'Flexcoders\\GovPayNet\\StructInternationalAddress',
            'PayLocationChargeAmount' => 'Flexcoders\\GovPayNet\\StructPayLocationChargeAmount',
            'PayLocationPaymentField' => 'Flexcoders\\GovPayNet\\StructPayLocationPaymentField',
            'PayLocationPaymentFieldUSAddress' => 'Flexcoders\\GovPayNet\\StructPayLocationPaymentFieldUSAddress',
            'PayRequest' => 'Flexcoders\\GovPayNet\\StructPayRequest',
            'PayResponse' => 'Flexcoders\\GovPayNet\\StructPayResponse',
            'PaymentMethod' => 'Flexcoders\\GovPayNet\\EnumPaymentMethod',
            'PaymentResponseCode' => 'Flexcoders\\GovPayNet\\EnumPaymentResponseCode',
            'PersonName' => 'Flexcoders\\GovPayNet\\StructPersonName',
            'PhoneNumber' => 'Flexcoders\\GovPayNet\\StructPhoneNumber',
            'State' => 'Flexcoders\\GovPayNet\\EnumState',
            'USAddress' => 'Flexcoders\\GovPayNet\\StructUSAddress',
            'VoidPaymentRequest' => 'Flexcoders\\GovPayNet\\StructVoidPaymentRequest',
            'VoidPaymentResponse' => 'Flexcoders\\GovPayNet\\StructVoidPaymentResponse',
            'VoidPaymentResponseCode' => 'Flexcoders\\GovPayNet\\EnumVoidPaymentResponseCode',
            'amounts' => 'Flexcoders\\GovPayNet\\StructAmounts',
            'fields' => 'Flexcoders\\GovPayNet\\StructFields',
            'payLocationPaymentInformation' => 'Flexcoders\\GovPayNet\\StructPayLocationPaymentInformation',
            'value' => 'Flexcoders\\GovPayNet\\StructValue',
        );
    }
}
