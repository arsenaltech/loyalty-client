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

    public function earningRules() {
        $url = $this->instanceUrl() . '/earnings';
        $response = $this->_request('get', $url);
        return Util\Util::convertToStripeObject($response);
    }

    public function redeem($rule) {
        $url = $this->instanceUrl() . '/rewards';
        $response = $this->_request('post', $url, ['rule_id'=>$rule->id]);
        return Util\Util::convertToStripeObject($response);
    }

    public function earn($rule) {
        $url = $this->instanceUrl() . '/earn';
        $response = $this->_request('post', $url, ['rule_id'=>$rule->id]);
        return Util\Util::convertToStripeObject($response);
    }

    public function manualAdjustment($reason, $points) {
        $url = $this->instanceUrl() . '/earn';
        $response = $this->_request('post', $url, ['reason'=>$reason, 'points'=>$points]);
        return Util\Util::convertToStripeObject($response);
    }



}