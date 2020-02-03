<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class Reward extends ApiResource
{
    const OBJECT_NAME = "reward";
    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    public static function removeExpiredCode($reward_id) {
        $url = self::baseUrl().'remove-expired-code';
        $response = self::_staticRequest('post', $url, ['reward_id'=>$reward_id]);
        return Util\Util::convertToStripeObject($response);
    }
}