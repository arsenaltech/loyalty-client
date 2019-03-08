<?php

namespace Arsenaltech\Loyalty\ApiOperations;

/**
 * Trait for deletable resources. Adds a `delete()` method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Delete
{
    /**
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return \Arsenaltech\Loyalty\ApiResource The deleted resource.
     */
    public function delete($params = null, $opts = null)
    {
        self::_validateParams($params);

        $url = $this->instanceUrl();
        list($response, $opts) = $this->_request('delete', $url, $params);
        $this->refreshFrom($response, $opts);
        return $this;
    }
}
