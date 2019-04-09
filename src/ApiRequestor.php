<?php

namespace Arsenaltech\Loyalty;

use Arsenaltech\Loyalty\Error\InvalidRequest;
use Arsenaltech\Loyalty\Error\NotFound;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

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
        $this->_apiBase = Loyalty::apiUrl();

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
            $args = ['form_params'=>$params];

        }
        //$args['debug'] = true;
        try {
            $response = $this->_httpClient->request($method, $url, $args);
        }
        catch (ClientException $e){
            throw new NotFound('Requested resource not found');
        }
        catch (ServerException $e){
            throw new InvalidRequest('Something went wrong');
        }
        return json_decode((string)$response->getBody(), true);
    }

    private function getHeaders() {
        return [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$this->_apiKey
        ];
    }




}
