<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Shanghai');
require_once __DIR__.'/../library/predis/autoload.php';
$config = array(
         		 'scheme' => 'tcp',
         		 'host'   => '127.0.0.1',
         		 'port'   => 6380,
         		 'database' => 0
         	);
Predis\Autoloader::register();
$redis = new Predis\Client($config);
$redis->hset('20141119', 'shopItems', 1);
$data = array('shopId' => 3119, 'page'=>1, 'order'=>0);
$a = curl_init('http://app.kongfz.com/shop/shopItems');
$options = array(CURLOPT_POST => 1,
                CURLOPT_RETURNTRANSFER =>1,
                CURLOPT_POSTFIELDS => http_build_query($data));
curl_setopt_array($a, $options);
$b = curl_exec($a);
curl_close($a);
#var_dump($b);
$c=json_decode($b,true);
#var_dump($c);
if($c['status']==1){
    $redis->hincrby('20141119', 'shopItems', 1);
}
exit;