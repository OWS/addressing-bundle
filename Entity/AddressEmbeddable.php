<?php

namespace Daften\Bundle\AddressingBundle\Entity;

use CommerceGuys\Addressing\Address;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class AddressEmbeddable extends Address
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $locale;

    /**
     * @ORM\Column(type="string")
     */
    protected string $givenName;

    /**
     * @ORM\Column(type="string")
     */
    protected string $additionalName;

    /**
     * @ORM\Column(type="string")
     */
    protected string $familyName;

    /**
     * @ORM\Column(type="string")
     */
    protected string $organization;

    /**
     * @ORM\Column(type="string")
     */
    protected string $addressLine1;

    /**
     * @ORM\Column(type="string")
     */
    protected string $addressLine2;

    /**
     * @ORM\Column(type="string")
     */
    protected string $addressLine3;

    /**
     * @ORM\Column(type="string")
     */
    protected string $postalCode;

    /**
     * @ORM\Column(type="string")
     */
    protected string $sortingCode;

    /**
     * @ORM\Column(type="string")
     */
    protected string $locality;

    /**
     * @ORM\Column(type="string")
     */
    protected string $dependentLocality;

    /**
     * @ORM\Column(type="string")
     */
    protected string $administrativeArea;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected string $countryCode;

    public function __toString(): string
    {
        return implode(', ', array_filter([
            implode(' ', \array_filter([
                $this->getGivenName(),
                $this->getAdditionalName(),
                $this->getFamilyName(),
            ])),
            $this->getAddressLine1(),
            $this->getAddressLine2(),
            implode(' ', \array_filter([
                $this->getPostalCode(),
                $this->getLocality(),
            ])),
            $this->getCountryCode(),
        ]));
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale = ''): void
    {
        $this->locale = $locale;
    }

    /**
     * @param string $additionalName
     */
    public function setAdditionalName(string $additionalName = ''): void
    {
        $this->additionalName = $additionalName;
    }

    /**
     * @param string $givenName
     */
    public function setGivenName(string $givenName = ''): void
    {
        $this->givenName = $givenName;
    }

    /**
     * @param string $familyName
     */
    public function setFamilyName(string $familyName = ''): void
    {
        $this->familyName = $familyName;
    }

    /**
     * @param string $organization
     */
    public function setOrganization(string $organization = ''): void
    {
        $this->organization = $organization;
    }

    /**
     * @param string $addressLine1
     */
    public function setAddressLine1($addressLine1 = ''): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @param string $addressLine2
     */
    public function setAddressLine2(string $addressLine2 = ''): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @param string $addressLine3
     */
    public function setAddressLine3(string $addressLine3 = ''): void
    {
        $this->addressLine3 = $addressLine3;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode = ''): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @param string $sortingCode
     */
    public function setSortingCode(string $sortingCode = ''): void
    {
        $this->sortingCode = $sortingCode;
    }

    /**
     * @param string $locality
     */
    public function setLocality(string $locality = ''): void
    {
        $this->locality = $locality;
    }

    /**
     * @param string $dependentLocality
     */
    public function setDependentLocality(string $dependentLocality = ''): void
    {
        $this->dependentLocality = $dependentLocality;
    }

    /**
     * @param string $administrativeArea
     */
    public function setAdministrativeArea(string $administrativeArea = ''): void
    {
        $this->administrativeArea = $administrativeArea;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode = ''): void
    {
        $this->countryCode = $countryCode;
    }

}
