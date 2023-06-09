<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Bridge\Bridgeapi\Models\Shared;


class Transaction
{
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $amount;
    
	#[\JMS\Serializer\Annotation\SerializedName('beneficiary')]
    #[\JMS\Serializer\Annotation\Type('Bridge\Bridgeapi\Models\Shared\Beneficiary')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Beneficiary $beneficiary = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $currency;
    
	#[\JMS\Serializer\Annotation\SerializedName('end_to_end_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $endToEndId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('execution_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $executionDate = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $label;
    
	public function __construct()
	{
		$this->amount = 0;
		$this->beneficiary = null;
		$this->currency = "";
		$this->endToEndId = null;
		$this->executionDate = null;
		$this->label = "";
	}
}
