<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:59 PM
 */
require 'vendor/autoload.php';
use Arsenaltech\Loyalty\Customer;
use Arsenaltech\Loyalty\Error\NotFound;
use Arsenaltech\Loyalty\Loyalty;
use Arsenaltech\Loyalty\Order;
use Arsenaltech\Loyalty\SpendingRule;

Loyalty::setApiKey('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM2NTQ0MjZiN2YwZDkzNmM1NTY3MjkwNjU5N2Y2NjVmNzRkYWJhYjU1NDhjOWMwMWY5OGFiMjcwMmQzNWUzYjdkODIyNjU5YmFjM2UxNjI3In0.eyJhdWQiOiIxIiwianRpIjoiMzY1NDQyNmI3ZjBkOTM2YzU1NjcyOTA2NTk3ZjY2NWY3NGRhYmFiNTU0OGM5YzAxZjk4YWIyNzAyZDM1ZTNiN2Q4MjI2NTliYWMzZTE2MjciLCJpYXQiOjE1NTQ3ODAyMjksIm5iZiI6MTU1NDc4MDIyOSwiZXhwIjoxNTg2NDAyNjI5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.SkdDNufoQa6LGUbqeBLjzBvpgIhSvNnKrS7FIZtffhVJH_DFtJqBL7_2chjCdjXe45yOikfaXan5ci-7RtfwdZzhRl0p8dpC846hkHzBVOPHlC3sfP8yOaja2DpaJWH1sJonIlx24cJ4US_GIlQ68OzsvNyTmAUlf5enO7mKKVQJ52AycJPgG7qdZyIgZmU26xGtSEEf1FDmcBLfiW-U-DRFu2GOIfzm2PCo_7Gz2_XrZCntHiZG9c2aHSdkGvlvWYQmdVWZVK_ugItlXbX5dFRZRnL0HEPPXPo9z1Jn8TGT9U5FVkwor0PTxXvtSvLNRcaB6WAfDu-ibU-xBvTufzIXdifzsO0b0W9lz05CYadsrk857r_I8nDlFeAvi2iDcRkI7Y2ndcux--xOEjIxKE9vduO8OwC8BcLGp-gO2zRj3kBc2ccCMu_edMgavNNPQKAuhHYryuuLmDpkBG0HABaJCiIhYGbqruInje9n8ob5GoWHYYIristXRzlP8u_Xmdy3-lQ9J7OR7wlRXgHFo4d_-IF2M8ZmXgl_3ikwWu241y9JH3K5DOq6a5FLP_QmrNu3AwSx_s_2wpK6sFOdsedGzq8gLA7nYl7Aic4bKXvGwtwqxm41mU2nho07I1a9E7p75-D4t2ZeWgDkwB84RegQj-ZErvF9BwsweR5sWOA');
try {
    $customer = Customer::retrieve(2);
    print_r($customer);

}
catch(NotFound $e) {
    echo $e->getMessage();
}
//$history = $customer->history();
//print_r($history);
//$order = Order::create([
//    'external_id'=>121,
//    'customer_id'=>$customer->external_id,
//    'rewardable_total'=>200,
//    'total'=>200,
//    'status'=>'paid',
//    'coupons'=>['aserwea','AHXELAJELA']
//]);
//print_r($order);
////$ret = Order::retrieve(1);
////$ret = Customer::retrieve(1);
////print_r($ret);
//
//$rules = $customer->earningRules();
//print_r($rules);
//
//foreach($rules as $rule) {
//    echo $rule->url($customer);
//}
//
//$rules = SpendingRule::all();
//print_r($rules);
//
//$reward = $customer->redeem($rules[0]);
//print_r($reward);