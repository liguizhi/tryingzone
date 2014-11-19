<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Shanghai');
use tz\tzMonitor;
require_once __DIR__.'/../library/predis/autoload.php';
$config = array(
         		 'scheme' => 'tcp',
         		 'host'   => '127.0.0.1',
         		 'port'   => 6380,
         		 'database' => 0
         	);
Predis\Autoloader::register();
$redis = new Predis\Client($config);
$data = array('shopId' => 3119, 'page'=>1, 'order'=>0);
$url = 'https://app.kongfz.com/shop/shopItems';
$result = tzMonitor::httpRequest($url, $data);
//$a = curl_init('http://app.kongfz.com/shop/shopItems');
//$options = array(CURLOPT_POST => 1,
//                CURLOPT_RETURNTRANSFER =>1,
//                CURLOPT_POSTFIELDS => http_build_query($data));
//curl_setopt_array($a, $options);
//$b = curl_exec($a);
//curl_close($a);
#var_dump($b);
//$c=json_decode($b,true);
#var_dump($c);
if($result['status']==1){
    $redis->hincrby('20141119', 'shopItems', 1);
}
exit;
