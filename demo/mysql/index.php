<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

$config = [
    'host' => '172.16.37.128',
    'user' => 'root',
    'password' => 'ww111111',
    'database' => 'hyperf-test',
    'charset' => 'utf8',
];

\Swoole\Coroutine::create(function ($config) {
    $db = new \Swoole\Coroutine\MySQL();
    $status = $db->connect($config);
//    var_dump('=== connect back ===');
//    var_dump($status);

    $sql = "show tables";
//    $data = $db->query($sql);
//    print_r($data);

    $sql = "select * from zf_user";
    $query = $db->query($sql);
    var_dump($query);


    $res = $db->prepare($query);

    var_dump($res);

//    var_dump('=== connect_errno ===');
//    var_dump($db->connect_errno);
//    var_dump('=== connect_error ===');
//    var_dump($db->connect_error);
//    var_dump('=== errno ===');
//    var_dump($db->errno);
//    var_dump('=== error ===');
//    var_dump($db->error);
//    var_dump('=== serverInfo ===');
//    var_dump($db->serverInfo);
//    var_dump('=== insert_id ===');
//    var_dump($db->insert_id);
//    var_dump('=== affected_rows ===');
//    var_dump($db->affected_rows);

    $db->close();
}, $config);
