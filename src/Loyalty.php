<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 2019-03-07
 * Time: 16:00
 */

namespace Arsenaltech\Loyalty;


class Loyalty
{
    // @var string The API key to be used for requests.
    public static $apiKey;

    // @var string The client_id to be used for Connect requests.
    public static $clientId;

    public static $socialUrl = 'http://loyalty.test/social/';


    // @var string The base URL for the Stripe API.
    public static $apiBase = 'http://loyalty.test/api/';

    /**
     * @return string The API key used for requests.
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}