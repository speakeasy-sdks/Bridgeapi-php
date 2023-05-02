<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Bridge\Bridgeapi\Models\Shared;


class Beneficiary
{
    /**
     * The name of the company if the beneficiary is a company.
     * 
     * @var ?string $companyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;
    
    /**
     * The first name of the beneficiary.
     * 
     * @var ?string $firstName
     */
	#[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;
    
    /**
     * The IBAN of the recipient.
     * 
     * @var string $iban
     */
	#[\JMS\Serializer\Annotation\SerializedName('iban')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $iban;
    
    /**
     * The last name of the beneficiary.
     * 
     * @var ?string $lastName
     */
	#[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;
    
	public function __construct()
	{
		$this->companyName = null;
		$this->firstName = null;
		$this->iban = "";
		$this->lastName = null;
	}
}