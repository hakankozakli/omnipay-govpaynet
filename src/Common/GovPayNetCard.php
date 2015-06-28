<?php

namespace Omnipay\GovPayNet\Common;

use Omnipay\Common\CreditCard;

class GovPayNetCard extends CreditCard
{
    /**
     * @var array
     */
    protected static $brands = array(
        CreditCard::BRAND_VISA => 'VI'
    );

    /**
     * Override the brand returned
     *
     * @return string
     */
    public function getBrand()
    {
        $brand = parent::getBrand();

        if (array_key_exists($brand, static::$brands)) {
            return static::$brands[$brand];
        }

        return $brand;
    }

    /**
     * Get Card Middle Name.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->getParameter('middleName');
    }

    /**
     * Set Card Middle Name.
     *
     * @param string $value Parameter value
     * @return GovPayNetCard provides a fluent interface.
     */
    public function setMiddleName($value)
    {
        $this->setParameter('middleName', $value);

        return $this;
    }

    /**
     * Get Card Phone Area Code.
     *
     * @return string
     */
    public function getPhoneAreaCode()
    {
        return $this->getParameter('phoneAreaCode');
    }

    /**
     * Set Card Phone Area Code.
     *
     * @param string $value Parameter value
     * @return GovPayNetCard provides a fluent interface.
     */
    public function setPhoneAreaCode($value)
    {
        $this->setParameter('phoneAreaCode', $value);

        return $this;
    }

    /**
     * Get Card Phone Suffix.
     *
     * @return string
     */
    public function getPhoneSuffix()
    {
        return $this->getParameter('phoneSuffix');
    }

    /**
     * Set Card Phone Suffix.
     *
     * @param string $value Parameter value
     * @return GovPayNetCard provides a fluent interface.
     */
    public function setPhoneSuffix($value)
    {
        $this->setParameter('phoneSuffix', $value);

        return $this;
    }

    /**
     * Get Card Phone Prefix.
     *
     * @return string
     */
    public function getPhonePrefix()
    {
        return $this->getParameter('phonePrefix');
    }

    /**
     * Set Card Phone Prefix.
     *
     * @param string $value Parameter value
     * @return GovPayNetCard provides a fluent interface.
     */
    public function setPhonePrefix($value)
    {
        $this->setParameter('phonePrefix', $value);

        return $this;
    }

    /**
     * Get Billing Zip.
     *
     * @return string
     */
    public function getBillingZip()
    {
        return $this->getPostcode();
    }

    /**
     * Set Billing Zip.
     *
     * @param string $value Parameter value
     * @return GovPayNetCard provides a fluent interface.
     */
    public function setBillingZip($value)
    {
        $this->setPostcode($value);

        return $this;
    }
}
