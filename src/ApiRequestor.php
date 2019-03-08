<?php

namespace Arsenaltech\Loyalty;

use GuzzleHttp\Client;

/**
 * Class ApiRequestor
 *
 * @package Stripe
 */
class ApiRequestor
{
    /**
     * @var string|null
     */
    private $_apiKey;

    /**
     * @var string
     */
    private $_apiBase;

    /**
     * @var Client
     */
    private $_httpClient;


    /**
     * ApiRequestor constructor.
     *
     * @param string|null $apiKey
     * @param string|null $apiBase
     */
    public function __construct()
    {
        $this->_apiKey = Loyalty::$apiKey;
        $this->_apiBase = Loyalty::$apiBase;

        $this->_httpClient = new Client(['base_uri'=>$this->_apiBase, 'headers'=>$this->getHeaders()]);

    }

    public function request($method, $url, $params = null, $headers = null)
    {
        //$url = '/';
        $method = strtoupper($method);
        if($method == 'GET') {
            $args = ['query'=>$params];
        }
        else {
            $args = ['body'=>$params];

        }
        //$args['debug'] = true;
        $response = $this->_httpClient->request($method, $url, $args);
        return json_decode((string)$response->getBody(), true);
    }

    private function getHeaders() {
        return [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$this->_apiKey
        ];
    }




}
