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
    /**
     * 响应 header 头信息
     *
     * @var string
     */
    public $header = '???';
    /**
     * 响应的 cookie 信息
     * @var string
     */
    public $cookie = '???';

    // todo
    static public function create($fd)
    {
    }

    // todo
    public function initHeader()
    {
    }

    // todo
    public function cookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null)
    {
    }

    // todo
    public function setCookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null)
    {
    }

    // todo
    public function rawcookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null)
    {
    }

    /**
     * 获取响应状态码
     *
     * @param int $http_code http 响应状态码
     * @param string | null $reason 响应消息或错误原因
     */
    public function status($http_code, $reason = null)
    {
    }

    /**
     * 设置响应状态码
     *
     * @param int $http_code
     * @param string | null $reason 响应消息或错误原因
     */
    public function setStatusCode($http_code, $reason = null)
    {
    }

    /**
     * 设置返回的 header 信息
     *
     * @param string $key
     * @param string $value
     * @param null $ucwords
     * @return bool header 设置是否成功
     */
    public function header($key, $value, $ucwords = null)
    {
        return true;
    }

    /**
     * 设置返回的 header 信息
     *
     * @param string $key
     * @param string $value
     * @param null $ucwords
     * @return bool header 设置是否成功
     */
    public function setHeader($key, $value, $ucwords = null)
    {
        return true;
    }

    // todo
    public function write($content)
    {
    }

    /**
     * 发送消息
     *
     * @param null|string $content 发送内容
     * @return bool 消息是否发送成功
     */
    public function end($content = null)
    {
        return true;
    }

    // todo
    public function sendfile($filename, $offset = null, $length = null)
    {
    }

    // todo
    public function redirect($location, $http_code = null)
    {
    }

    // todo
    public function detach()
    {
    }

    // todo
    public function upgrade()
    {
    }

    // todo
    public function push($data, $opcode = null, $flags = null)
    {
    }

    // todo
    public function recv()
    {
    }

    // todo
    public function close()
    {
    }

    // todo
    public function __destruct()
    {
    }
}