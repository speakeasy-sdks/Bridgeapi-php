<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Bridge\Bridgeapi;

class PaymentLinks 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Create a payment link
     * 
     * @param \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequest $request
     * @return \Bridge\Bridgeapi\Models\Operations\CreatePaymentLinkResponse
     */
	public function create(
        \Bridge\Bridgeapi\Models\Shared\PaymentLinkRequest $request,
    ): \Bridge\Bridgeapi\Models\Operations\CreatePaymentLinkResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-links');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Bridge\Bridgeapi\Models\Operations\CreatePaymentLinkResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createPaymentLink200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Operations\CreatePaymentLink200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->invalidBodyContent = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\InvalidBodyContent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve payment link information by ID
     * 
     * Returns the details of a payment link specified by its ID
     * 
     * @param \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkRequest $request
     * @return \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkResponse
     */
	public function get(
        \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkRequest $request,
    ): \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/pament-links/{PaymentLinkID}', \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Bridge\Bridgeapi\Models\Operations\GetPaymentLinkResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLinkResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\PaymentLinkResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->invalidBodyContent = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\InvalidBodyContent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a list of payment links
     * 
     * @param \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksRequest $request
     * @return \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksResponse
     */
	public function list(
        \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksRequest $request,
    ): \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-links');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Bridge\Bridgeapi\Models\Operations\ListPaymentLinksRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Bridge\Bridgeapi\Models\Operations\ListPaymentLinksResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLinksResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\PaymentLinksResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->invalidBodyContent = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\InvalidBodyContent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Revoke a payment link
     * 
     * Revokes the payment link specified by its ID
     * 
     * @param \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkRequest $request
     * @return \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkResponse
     */
	public function revoke(
        \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkRequest $request,
    ): \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-links/{PaymentLinkID}/revoke', \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Bridge\Bridgeapi\Models\Operations\RevokePaymentLinkResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->invalidBodyContent = $serializer->deserialize((string)$httpResponse->getBody(), 'Bridge\Bridgeapi\Models\Shared\InvalidBodyContent', 'json');
            }
        }

        return $response;
    }
}