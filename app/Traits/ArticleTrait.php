<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ArticleTrait
{
    private Client $client;

    /**
     * Api key will be in this variable
     * @var string
     */
    private string $apiKey;

    /**
     * Api base url will be in this variable
     * @var string
     */
    private string $baseUri;

    /**
     * Api endpoint will be in this variable
     * @var string
     */
    private string $endpoint;

    /**
     * Initialize the trait with provided parameters
     *
     * @param string $baseUri
     * @param string $apiKey
     * @param string $endpoint
     */
    private function initializeService(string $baseUri, string $apiKey, string $endpoint): void
    {
        $this->baseUri = $baseUri;
        $this->apiKey = $apiKey;
        $this->endpoint = $endpoint;

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    /**
     * Fetch data from the API
     *
     * @return array
     */
    public function fetchData(): array
    {
        try {
            $url = $this->endpoint.$this->apiKey;
            $response = $this->client->get($url);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return [];
        }
    }
}
