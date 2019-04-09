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

Loyalty::setApiKey('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImVlYjA2MDY2ZDY0MzU4OTM4ODg5Yjk4M2FhMTBlMGEzZWZlNmIwNjdkMDVmOGIwNTFkOGRjMDY4N2YwNGJjYWUxN2Q2NzBjODJlZGE4MmU5In0.eyJhdWQiOiIxIiwianRpIjoiZWViMDYwNjZkNjQzNTg5Mzg4ODliOTgzYWExMGUwYTNlZmU2YjA2N2QwNWY4YjA1MWQ4ZGMwNjg3ZjA0YmNhZTE3ZDY3MGM4MmVkYTgyZTkiLCJpYXQiOjE1NTQ3NjM2NDYsIm5iZiI6MTU1NDc2MzY0NiwiZXhwIjoxNTg2Mzg2MDQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.3ql5fXv8YdMj-JbMPi21bksfq9KAMsNz_HlQmVp-jJcBPxk9QeBCGkxC4umgzJPcFL5DTGT8xOZUlOCX14afqeKgA0jMcegwmWkojQiHWUmzvVnfB8RRKw6JbQDguO1z5XZvsJu1cCLU3GAE-g30nkdQzXxmwcpP1IkeoJ9fc_8abxd5EtTSJFjqE9h9wD8NUz_HZYJE1zehml67E-DOgK-VQ7ItrlnUPOl0Y9yoSt5zErV2KlkcDdVGGKAho9FqoOWhGNZxyhBGvTp1X3Iobvri8mvEqgYZQxr4yyYqGQm8Ogw2Snxkp-4ZY5Zsov_hySz_AjvK4yuixqz2VmUcgXXX9xulmoJGodpFP-EelC5M330_MNDxTUe2MikJzwd_4z40ZlhgDlQR3WmcfL2ldKzEKXboZk8VlwbDJpIapeD8cYjIux6ZW_jxmmIubAZmNtDUG2dDOgikEjG');
try {
    $customer = Customer::retrieve(5);
}
catch(NotFound $e) {
}
print_r($customer);
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