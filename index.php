<?php
/**
 * Created by PhpStorm.
 * User: RPP
 * Date: 9/23/2016
 * Time: 2:48 PM
 */

$m = new Memcached();
$m->addServer('134.168.59.218', 11211);

$m->set('int', 99);
var_dump($m->get('int'));