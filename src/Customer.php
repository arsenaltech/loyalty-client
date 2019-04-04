<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class Customer extends ApiResource
{
    const OBJECT_NAME = "customer";
    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    public function history($page=1) {
        $url = $this->instanceUrl() . '/history';
        $response = $this->_request('get', $url, ['page'=>$page]);
        return Util\Util::convertToStripeObject($response['data']);
    }

    public function instanceUrl()
    {
        if(isset($this->external_id)) {
            return static::resourceUrl($this->external_id);
        }
        return parent::instanceUrl();
    }

}