<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Sanas", "strtoupper");
sayHello("Sanas", "strtolower");
sayHello("Sanas", function (string $name): string {
    return strtoupper($name);
});
sayHello("Sanas", fn($name) => strtoupper($name));