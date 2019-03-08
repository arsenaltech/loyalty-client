<?php

namespace Arsenaltech\Loyalty\ApiOperations;

use Arsenaltech\Loyalty\ApiResource;
use Arsenaltech\Loyalty\Util\Util;

/**
 * Trait for creatable resources. Adds a `create()` static method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Create
{
    /**
     * @param array|null $params
     * @param array|string|null $options
     *
     * @return ApiResource|array The created resource.
     */
    public static function create($params = null, $options = null)
    {
        self::_validateParams($params);
        $url = static::classUrl();

        $response = static::_staticRequest('post', $url, $params, $options);
        $obj = Util::convertToStripeObject($response->json);
        $obj->setLastResponse($response);
        return $obj;
    }
}
