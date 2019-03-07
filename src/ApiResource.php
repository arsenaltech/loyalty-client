<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 2019-03-07
 * Time: 16:06
 */

namespace Arsenaltech\Loyalty;


class ApiResource
{
    /**
     * @return string The base URL for the given class.
     */
    public static function baseUrl()
    {
        return Loyalty::$apiBase;
    }

    /**
     * @return string The endpoint URL for the given class.
     */
    public static function classUrl()
    {
        // Replace dots with slashes for namespaced resources, e.g. if the object's name is
        // "foo.bar", then its URL will be "/v1/foo/bars".
        $base = str_replace('.', '/', static::OBJECT_NAME);
        return "/${base}s";
    }

    /**
     * @return string The instance endpoint URL for the given class.
     */
    public static function resourceUrl($id)
    {
        if ($id === null) {
            $class = get_called_class();
            $message = "Could not determine which URL to request: "
                . "$class instance has invalid ID: $id";
            throw new Error\InvalidRequest($message, null);
        }
        $id = Util\Util::utf8($id);
        $base = static::classUrl();
        $extn = urlencode($id);
        return "$base/$extn";
    }

    /**
     * @return string The full API URL for this API resource.
     */
    public function instanceUrl()
    {
        return static::resourceUrl($this['id']);
    }
}