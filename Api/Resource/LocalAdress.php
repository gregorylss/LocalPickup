<?php

namespace LocalPickup\Api\Resource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Thelia\Api\Bridge\Propel\State\PropelCollectionProvider;
use Thelia\Api\Bridge\Propel\State\PropelItemProvider;

#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/admin/local-address/{id}',
            name: 'api_local_address_get_id',
            provider: PropelItemProvider::class
        ),
        new GetCollection(
            uriTemplate: '/admin/local-address',
            name: 'api_local_address_get_collection',
            provider: PropelCollectionProvider::class
        )
    ],
    normalizationContext: ['groups' => [self::GROUP_READ]]
)]
#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/front/local-address/{id}',
            name: 'api_local_address_get_id_front',
            provider: PropelItemProvider::class
        ),
        new GetCollection(
            uriTemplate: '/front/local-address',
            name: 'api_local_address_get_collection_front',
            provider: PropelCollectionProvider::class
        )
    ],
    normalizationContext: ['groups' => [self::GROUP_FRONT_READ]]
)]

class LocalAdress
{
    public const GROUP_READ = 'local_address:read';
    public const GROUP_FRONT_READ = 'front:local_address:read';

    #[Groups([self::GROUP_READ, self::GROUP_FRONT_READ])]
    private ?int $id = null;

    #[Groups([self::GROUP_READ, self::GROUP_FRONT_READ])]
    private ?string $label = null;

    #[Groups([self::GROUP_READ])]
    private ?int $customerId = null;

    #[Groups([self::GROUP_READ])]
    private ?int $titleId = null;

    #[Groups([self::GROUP_READ])]
    private ?string $company = null;

    #[Groups([self::GROUP_READ])]
    private ?string $firstname = null;

    #[Groups([self::GROUP_READ])]
    private ?string $lastname = null;

    #[Groups([self::GROUP_READ])]
    private ?string $address1 = null;

    #[Groups([self::GROUP_READ])]
    private ?string $address2 = null;

    #[Groups([self::GROUP_READ])]
    private ?string $address3 = null;

    #[Groups([self::GROUP_READ])]
    private ?string $zipcode = null;

    #[Groups([self::GROUP_READ])]
    private ?string $city = null;

    #[Groups([self::GROUP_READ])]
    private ?string $countryId = null;

    #[Groups([self::GROUP_READ])]
    private ?string $phone = null;

    #[Groups([self::GROUP_READ])]
    private ?string $cellphone = null;

    #[Groups([self::GROUP_READ])]
    private ?int $isDefault = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getLabel(): ?string
    {
        return $this->label;
    }
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }
    public function setTitleId(?int $titleId): self
    {
        $this->titleId = $titleId;
        return $this;
    }
    public function getCompany(): ?string
    {
        return $this->company;
    }
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
    public function getAddress1(): ?string
    {
        return $this->address1;
    }
    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;
        return $this;
    }
    public function getAddress2(): ?string
    {
        return $this->address2;
    }
    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;
        return $this;
    }
    public function getAddress3(): ?string
    {
        return $this->address3;
    }
    public function setAddress3(?string $address3): self
    {
        $this->address3 = $address3;
        return $this;
    }
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }
    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }
    public function getCity(): ?string
    {
        return $this->city;
    }
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    public function getCellphone(): ?string
    {
        return $this->cellphone;
    }
    public function setCellphone(?string $cellphone): self
    {
        $this->cellphone = $cellphone;
        return $this;
    }
    public function getIsDefault(): ?int
    {
        return $this->isDefault;
    }
    public function setIsDefault(?int $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
}
