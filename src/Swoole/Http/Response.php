<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Http\Response
 * @package      :   Swoole\Http
 */
namespace Swoole\Http;

class Response
{
    // todo property
    public $fd = '???';
    // todo property
    public $socket = '???';
    // todo property
    public $header = '???';
    // todo property
    public $cookie = '???';
    // todo
    static public function create($fd){}
    // todo
    public function initHeader(){}
    // todo
    public function cookie($name,$value = null,$expires = null,$path = null,$domain = null,$secure = null,$httponly = null,$samesite = null){}
    // todo
    public function setCookie($name,$value = null,$expires = null,$path = null,$domain = null,$secure = null,$httponly = null,$samesite = null){}
    // todo
    public function rawcookie($name,$value = null,$expires = null,$path = null,$domain = null,$secure = null,$httponly = null,$samesite = null){}
    // todo
    public function status($http_code,$reason = null){}
    // todo
    public function setStatusCode($http_code,$reason = null){}
    // todo
    public function header($key,$value,$ucwords = null){}
    // todo
    public function setHeader($key,$value,$ucwords = null){}
    // todo
    public function write($content){}
    // todo
    public function end($content = null){}
    // todo
    public function sendfile($filename,$offset = null,$length = null){}
    // todo
    public function redirect($location,$http_code = null){}
    // todo
    public function detach(){}
    // todo
    public function upgrade(){}
    // todo
    public function push($data,$opcode = null,$flags = null){}
    // todo
    public function recv(){}
    // todo
    public function close(){}
    // todo
    public function __destruct(){}
}