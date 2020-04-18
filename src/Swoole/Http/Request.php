<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Http\Request
 * @package      :   Swoole\Http
 */
namespace Swoole\Http;

class Request
{
    /* @var int 连接标记 */
    public $fd = 1;
    /* @var array header头 */
    public $header = [];
    /* @var array 服务器信息 */
    public $server = [];
    // todo property
    public $cookie = '???';
    // todo property
    public $get = '???';
    // todo property
    public $files = '???';
    // todo property
    public $post = '???';
    // todo property
    public $tmpfiles = '???';
    // todo
    public function rawContent(){}
    // todo
    public function getData(){}
    // todo
    public function __destruct(){}
}