<?php

namespace Arsenaltech\Loyalty\ApiOperations;


/**
 * Trait for resources that need to make API requests.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Request
{
    /**
     * @param array|null|mixed $params The list of parameters to validate
     *
     * @throws \Arsenaltech\Loyalty\Error\Api if $params exists and is not an array
     */
    protected static function _validateParams($params = null)
    {
        if ($params && !is_array($params)) {
            $message = "You must pass an array as the first argument to Stripe API "
               . "method calls.  (HINT: an example call to create a charge "
               . "would be: \"Stripe\\Charge::create(['amount' => 100, "
               . "'currency' => 'usd', 'source' => 'tok_1234'])\")";
            throw new \Arsenaltech\Loyalty\Error\Api($message);
        }
    }

    /**
     * @param string $method HTTP method ('get', 'post', etc.)
     * @param string $url URL for the request
     * @param array $params list of parameters for the request
     * @param array|string|null $options
     *
     * @return array tuple containing (the JSON response, $options)
     */
    protected function _request($method, $url, $params = [])
    {
        $resp = static::_staticRequest($method, $url, $params);
        $this->setLastResponse($resp);
        return $resp['data'];
    }

    /**
     * @param string $method HTTP method ('get', 'post', etc.)
     * @param string $url URL for the request
     * @param array $params list of parameters for the request
     *
     * @return array tuple containing (the JSON response, $options)
     */
    protected static function _staticRequest($method, $url, $params)
    {
        $requestor = new \Arsenaltech\Loyalty\ApiRequestor();
        $response = $requestor->request($method, $url, $params);
        return $response;
    }
}
