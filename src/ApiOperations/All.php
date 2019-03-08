<?php

namespace Arsenaltech\Loyalty\ApiOperations;

use Arsenaltech\Loyalty\Error\Api as ApiError;
use Arsenaltech\Loyalty\Util\Util;

/**
 * Trait for listable resources. Adds a `all()` static method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait All
{
    /**
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return \Arsenaltech\Loyalty\Collection of ApiResources
     * @throws ApiError
     */
    public static function all($params = null, $opts = null)
    {
        //self::_validateParams($params);
        $url = static::classUrl();

        $response = static::_staticRequest('get', $url, $params);
        $objs = Util::convertToStripeObject($response['data']['data'], static::OBJECT_NAME);
        if(!is_array($objs)) {
            $message = "Expected array";
            throw new ApiError($message);

        }

        //$obj->setLastResponse($response);
        //$obj->setRequestParams($params);
        return $objs;
    }
}
