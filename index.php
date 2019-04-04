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

Loyalty::setApiKey('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkzZTdlZTg1YWVhZmZiY2YyMjYzMzFhODk0NjRlY2ZkZGU5NGI5YWQyOWU5YjA5ZDNjYWIwODY0MTUzOTBlYjUzNmVkYjA3NjkyN2RlMDUzIn0.eyJhdWQiOiIxIiwianRpIjoiOTNlN2VlODVhZWFmZmJjZjIyNjMzMWE4OTQ2NGVjZmRkZTk0YjlhZDI5ZTliMDlkM2NhYjA4NjQxNTM5MGViNTM2ZWRiMDc2OTI3ZGUwNTMiLCJpYXQiOjE1NTE5MTY0NTksIm5iZiI6MTU1MTkxNjQ1OSwiZXhwIjoxNTgzNTM4ODU5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.dg2rs4tbdntWBx4nXeMOZ4wkNnvDLhEH9el1SfWwsSnyl4VJpnfM9j1nn97z7F2hNrXRONxyNb0lY_wvZonUlMfOnIucmGblv4P4aqIku600-jIIXE1EoFgNw_RQoyhS7MVliv9nnD7RodliwymLCzuG5PQ-A3T3dzk_z3oXNwwoyIXtqpNqSoa5rJ7ILbudZyC0vXSJqfNzq485_sTS0HeLdl-eU2pkI8-dNWnKQ5kYHa8smdur3cJieZ6ppenXcban0RCrZJKcgYFtTamqJj7aPHXAMZ9x0WwDch4LkfBudcn4OzUwEhldtxRELvEBj0Ce0bVr9guMUMW21CV_DhIfu-oYC_og7HFhERpY-jN9LE5SAKbiUktcCYX37FkzLdHgURpKyYSTCCrwSMxoyzul3LAka6YSnfb88_VakyXquhPfJ-5y0ecTZk8R7lg_jk8JJR7VNF5I-V0r6utf1ZXKGmYdknSYasERYHDF2FbtCs35AKzrkwAsReHcP8kBYEAnb6oBHYjSaMAOFzv5jxEMfv7OGw3XWnBrbf_KEaSXQ5Dja71BebfTWRxtrcV6vmSXTuJdEdFwW6UKTPE2SqxrOGfWS8WYT6aI8F4V-LWkt_p-wcnpQomjT1_MSCCziDibpCOiojAXV_HyUg4aUKvKw2zKEz2agPPb9DCvZ_k');

$customer = Customer::retrieve(2);
print_r($customer);
//$history = $customer->history();
//print_r($history);
//$ret = Order::retrieve(1);
//$ret = Customer::retrieve(1);
//print_r($ret);

$rules = SpendingRule::all();
print_r($rules);