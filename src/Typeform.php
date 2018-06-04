<?php
namespace WATR;

use GuzzleHttp\Client;

/**
 * Base Package wrapper for Typeform API
 */
class Typeform
{
    /**
     * @var  GuzzleHttp\Client
     */
    protected $http;

    /**
     * @var  string Typeform API key
     */
    protected $apiKey;

    /**
     * @var string Typeform base URI
     */
    protected $baseUri = 'https://api.typeform.com/';

    public function __construct($apiKey)
    {
        $this->http = new Client([
            'base_uri' => $this->baseUri
        ]);
        $this->apiKey = $apiKey;
    }

    public function getForm($formId)
    {
        $response = $this->http->get("/forms/" . $formId);
        return $response;
    }
}
