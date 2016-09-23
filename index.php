<?php
/**
 * Created by PhpStorm.
 * User: RPP
 * Date: 9/23/2016
 * Time: 2:48 PM
 */
echo "Hello, simple";

define('MEMCACHED_HOST', '134.168.59.218');
define('MEMCACHED_PORT', '11211');
$memcache = new Memcache;
$cacheAvailable = $memcache->connect(MEMCACHED_HOST, MEMCACHED_PORT);

echo "Memcached connected ? ";

var_dump($cacheAvailable);