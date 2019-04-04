<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:59 PM
 */
require 'vendor/autoload.php';
use Arsenaltech\Loyalty\Customer;
use Arsenaltech\Loyalty\Loyalty;
use Arsenaltech\Loyalty\Order;
use Arsenaltech\Loyalty\SpendingRule;

Loyalty::setApiKey('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImUyYzE1NzEyNzI3YjdlZDFjNDcxODQ5OWY5YmE2M2RjMWVmMmUwNWM1MTM3OTc5ZjMxMjU3MTc0M2M5YmRmNjc3MGI2NmM2YTViOTIxMDc1In0.eyJhdWQiOiIxIiwianRpIjoiZTJjMTU3MTI3MjdiN2VkMWM0NzE4NDk5ZjliYTYzZGMxZWYyZTA1YzUxMzc5NzlmMzEyNTcxNzQzYzliZGY2NzcwYjY2YzZhNWI5MjEwNzUiLCJpYXQiOjE1NTQ0MTM1MTUsIm5iZiI6MTU1NDQxMzUxNSwiZXhwIjoxNTg2MDM1OTE1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.f-NQmDt8OjudhxLruQ_oGHr5g5SmTxZYDYXV_ai6yrHJ-kXeNi2XzWhrA04s6_T_ceIBkZtZOwO07P9IldJVfJNCjh_otIetUzxpAA88FfonQ3b3EZusKd5sYHbCdnkpAgSCJZHHY1-OwXXJFPOfLOMhqvy7NFRs3Z8r3AY-0H2qdu6-hU3GTGcSTbUAsd7N70CN6KmcSlj4ORhVPwT_2vzgtWWbfT8HnW2ks9jN5ag1TYStcL9gf839GM-x11zbElUiM8dy0764UtVcx2qmTXzf07QeUJMXr_d2DGKOLudmt_vSwJXyj9wHMx4MuopzcEbMwB2YVP6leB2tTkWycGkeMo9HuLzi30rbjmMXUizTiRiQedX0qN0daEUFfIYCZAQ20YOIrY1wnX2qY3VhYyvPrc_4o7JHU8K0IECk5vzLEt4tw2414tDC9XjwG83MqBp3zPT363WduqKmYeg7DUewv7EyGecbpFO0mc1HVtTiWJoFvzb_xngBP0DnnwUl_UoRj4b6dGvIdItwBYSB7AAzh0vmTWml1rdAn9FSa3UNz1Ape18SVjrkTOs9W_LxjYBHP-08vUAhVcwKexKLolLLdInp_eOfvffHi9O3XtQHgl7x-JtgcNbyfD7sNZp3bDl0T2-kt6hcGahko4rNIhJrpJc15r_vizB_L1ZnJpc');

$customer = Customer::retrieve(11729);
print_r($customer);
//$history = $customer->history();
//print_r($history);
//$ret = Order::retrieve(1);
//$ret = Customer::retrieve(1);
//print_r($ret);

$rules = SpendingRule::all();
print_r($rules);