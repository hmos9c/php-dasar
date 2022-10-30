<?php

function createName()
{
    $name = "Sanas"; // local scope
}

createName();
echo $name . PHP_EOL;
