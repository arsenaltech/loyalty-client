<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 2019-03-07
 * Time: 16:06
 */

namespace Arsenaltech\Loyalty;


use Arsenaltech\Loyalty\ApiOperations\Request;
use Arsenaltech\Loyalty\Error\NotFound;

class ApiResource extends LoyaltyObject
{
    use Request;
    protected $_lastResponse;
    /**
     * @return string The base URL for the given class.
     */
    public static function baseUrl()
    {
        return Loyalty::apiUrl();
    }

    /**
     * @return string The endpoint URL for the given class.
     */
    public static function classUrl()
    {
        // Replace dots with slashes for namespaced resources, e.g. if the object's name is
        // "foo.bar", then its URL will be "/v1/foo/bars".
        $base = str_replace('.', '/', static::OBJECT_NAME);
        return "/api/${base}s";
    }

    /**
     * @return ApiResource The refreshed resource.
     */
    public function refresh()
    {
        $requestor = new ApiRequestor();
        $url = $this->instanceUrl();

        $response = $requestor->request(
            'get',
            $url,
            $this->_retrieveOptions
        );
        $this->setLastResponse($response);
        if($response['data'] == null) {
            throw new NotFound('Resource not found');
        }
        $this->refreshFrom($response['data'], $this->_opts);
        return $this;
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