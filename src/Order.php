<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class Order extends ApiResource
{
    const OBJECT_NAME = "order";
    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    public static function shipped($external_id)
    {
        $url = self::baseUrl().'shipped';
        $response = self::_staticRequest('post', $url, ['external_id'=>$external_id]);
        return Util\Util::convertToStripeObject($response);
    }
}