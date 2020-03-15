<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\MySQL\Statement
 * @package      :   Swoole\Coroutine\MySQL
 */
namespace Swoole\Coroutine\MySQL;

class Statement
{
    // todo property
    public $id = '???';
    // todo property
    public $affected_rows = '???';
    // todo property
    public $insert_id = '???';
    // todo property
    public $error = '???';
    // todo property
    public $errno = '???';
    // todo
    public function execute($params = null,$timeout = null){}
    // todo
    public function fetch($timeout = null){}
    // todo
    public function fetchAll($timeout = null){}
    // todo
    public function nextResult($timeout = null){}
    // todo
    public function recv($timeout = null){}
    // todo
    public function close(){}
}