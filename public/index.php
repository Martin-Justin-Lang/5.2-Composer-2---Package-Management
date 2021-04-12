<?php

require_once __DIR__ . '/../vendor/autoload.php';


$hello = new HelloWorld\SayHello();
echo $hello->world();