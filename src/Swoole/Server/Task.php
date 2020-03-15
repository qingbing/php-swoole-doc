<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Server\Task
 * @package      :   Swoole\Server
 */
namespace Swoole\Server;

final class Task
{
    // todo property
    public $data = '???';
    // todo property
    public $id = '???';
    // todo property
    public $worker_id = '???';
    // todo property
    public $flags = '???';
    // todo
    static public function pack($data){}
    // todo
    public function finish($data){}
}