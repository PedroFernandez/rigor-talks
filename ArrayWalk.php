<?php
$fruits =
    [
        "d" => "lemon",
        "a" => "orange",
        "b" => "banana",
        "c" => "apple"
    ];

function test_alter(&$element1, $key, $prefix)
{
    $element1 = "$prefix: $element1";
}

function test_print($element2, $key)
{
    echo "$key. $element2". "\n";
}

echo "Before ...:" . "\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and After:\n";

array_walk($fruits, 'test_print');
?>