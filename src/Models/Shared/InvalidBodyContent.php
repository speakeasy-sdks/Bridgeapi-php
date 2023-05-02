<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Bridge\Bridgeapi\Models\Shared;


/**
 * InvalidBodyContent - Invalid body content
 * 
 * @package Bridge\Bridgeapi\Models\Shared
 * @access public
 */
class InvalidBodyContent
{
	#[\JMS\Serializer\Annotation\SerializedName('documentation_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $documentationUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->documentationUrl = null;
		$this->message = null;
		$this->type = null;
	}
}
