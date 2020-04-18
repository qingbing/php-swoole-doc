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
    /**
     * 客户端的 socket id
     * @var int
     */
    public $fd;
    /**
     * 请求的头部信息
     * @var array
     */
    public $header = [];
    /**
     * 请求相关的服务器信息
     * @var array
     */
    public $server = [];
    /**
     * 请求携带的 COOKIE 信息，格式为键值对数组
     * @var array
     */
    public $cookie = [];
    /**
     * Http 请求的 GET 参数, 相当于 $_GET
     * @var array
     */
    public $get = [];
    /**
     * Http 请求的文件域
     * @var array
     */
    public $files = [];
    /**
     * POST 参数
     * @var array
     */
    public $post = [];
    /**
     * 文件域的临时文件
     */
    public $tmpfiles = [];

    /**
     * 获取原始的 POST 包体
     *
     * @return string
     */
    public function rawContent()
    {
        return '';
    }

    /**
     * 获取完整的原始 Http 请求报文
     *
     * @return string
     */
    public function getData()
    {
        return '';
    }

    /**
     * 魔术方法：析构函数
     */
    public function __destruct()
    {
    }
}