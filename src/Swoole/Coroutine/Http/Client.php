<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Http\Client
 * @package      :   Swoole\Coroutine\Http
 */
namespace Swoole\Coroutine\Http;

class Client
{
    // todo property
    public $errCode = '???';
    // todo property
    public $errMsg = '???';
    // todo property
    public $connected = '???';
    // todo property
    public $host = '???';
    // todo property
    public $port = '???';
    // todo property
    public $ssl = '???';
    // todo property
    public $setting = '???';
    // todo property
    public $requestMethod = '???';
    // todo property
    public $requestHeaders = '???';
    // todo property
    public $requestBody = '???';
    // todo property
    public $uploadFiles = '???';
    // todo property
    public $downloadFile = '???';
    // todo property
    public $downloadOffset = '???';
    // todo property
    public $statusCode = '???';
    // todo property
    public $headers = '???';
    // todo property
    public $set_cookie_headers = '???';
    // todo property
    public $cookies = '???';
    // todo property
    public $body = '???';
    // todo
    public function __construct($host,$port = null,$ssl = null){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function getDefer(){}
    // todo
    public function setDefer($defer = null){}
    // todo
    public function setMethod($method){}
    // todo
    public function setHeaders($headers){}
    // todo
    public function setBasicAuth($username,$password){}
    // todo
    public function setCookies($cookies){}
    // todo
    public function setData($data){}
    // todo
    public function addFile($path,$name,$type = null,$filename = null,$offset = null,$length = null){}
    // todo
    public function addData($path,$name,$type = null,$filename = null){}
    // todo
    public function execute($path){}
    // todo
    public function get($path){}
    // todo
    public function post($path,$data){}
    // todo
    public function download($path,$file,$offset = null){}
    // todo
    public function getBody(){}
    // todo
    public function getHeaders(){}
    // todo
    public function getCookies(){}
    // todo
    public function getStatusCode(){}
    // todo
    public function getHeaderOut(){}
    // todo
    public function upgrade($path){}
    // todo
    public function push($data,$opcode = null,$flags = null){}
    // todo
    public function recv($timeout = null){}
    // todo
    public function close(){}
}