<?php

$orders = ['TEST_ORDER_001', 'TEST_ORDER_002', 'TEST_ORDER_003', 'TEST_ORDER_004', 'TEST_ORDER_005', 'TEST_ORDER_006'];

$orderWithoutSource = ['TEST_ORDER_002'];


unset($orders[$orderWithoutSource[0]]);

print_r($orderWithoutSource);die('here bro!');

echo 'pepe';
