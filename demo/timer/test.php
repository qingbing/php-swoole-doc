<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */


// 循环执行
$time1 = \Swoole\Timer::tick(1000, function ($timer_id, $params) {
    echo $timer_id . PHP_EOL;
    var_dump($params);
}, [
    'name' => 'qingbing',
]);
var_dump($time1);


// 单次执行不传参数
$time2 = \Swoole\Timer::after(1000, function () {
//    var_dump(22);
});
var_dump($time2);


// 单次执行传参数
$time2 = \Swoole\Timer::after(1000, function ($params) {
    var_dump(22);
}, [
    'name' => 'qingbing',
]);
var_dump($time2);