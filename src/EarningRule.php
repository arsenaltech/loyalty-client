<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class EarningRule extends ApiResource
{
    const OBJECT_NAME = "earning_rule";
    use ApiOperations\All;

    public function url($customer) {
        if($this->earning_class->class_name == 'App\\Events\\SocialSharing') {
            return Loyalty::$socialUrl.'?rule_id='.$this->id.'&customer_key='.$customer->key;
        }
        return '';
    }

}