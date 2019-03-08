<?php

namespace Arsenaltech\Loyalty\ApiOperations;

/**
 * Trait for retrievable resources. Adds a `retrieve()` static method to the
 * class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Retrieve
{
    /**
     * @param array|string $id The ID of the API resource to retrieve,
     *     or an options array containing an `id` key.
     * @param array|string|null $opts
     *
     * @return \Arsenaltech\Loyalty\ApiResource
     */
    public static function retrieve($id, $opts = null)
    {
        $instance = new static($id);
        $instance->refresh();
        return $instance;
    }
}
