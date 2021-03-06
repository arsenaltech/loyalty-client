<?php

namespace Arsenaltech\Loyalty\ApiOperations;
use Arsenaltech\Loyalty\ApiResource;
use Arsenaltech\Loyalty\Util\Util;

/**
 * Trait for updatable resources. Adds an `update()` static method and a
 * `save()` method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Update
{
    /**
     * @param string $id The ID of the resource to update.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return \Stripe\ApiResource The updated resource.
     */
    public static function update($id, $params = null, $opts = null)
    {
        self::_validateParams($params);
        $url = static::resourceUrl($id);

        $response = static::_staticRequest('put', $url, $params, $opts);
        $obj = Util::convertToStripeObject($response['data']);
        $obj->setLastResponse($response);
        return $obj;
    }

    /**
     * @param array|string|null $opts
     *
     * @return \Stripe\ApiResource The saved resource.
     */
    public function save($opts = null)
    {
        $params = $this->serializeParameters();
        if (count($params) > 0) {
            $url = $this->instanceUrl();
            list($response, $opts) = $this->_request('post', $url, $params);
            $this->refreshFrom($response, $opts);
        }
        return $this;
    }
}
