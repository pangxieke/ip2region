<?php

include 'vendor/autoload.php';

use Pangxieke\Ip2Region\Ip2Region;

$ip2region = new Ip2Region();

$ip = '202.96.128.86';

$info = $ip2region->btreeSearch($ip);

var_dump($info);