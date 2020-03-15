<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\System
 * @package      :   Swoole\Coroutine
 */
namespace Swoole\Coroutine;

class System
{
    // todo
    static public function gethostbyname($domain_name,$family = null,$timeout = null){}
    // todo
    static public function dnsLookup($domain_name,$timeout = null){}
    // todo
    static public function exec($command,$get_error_stream = null){}
    // todo
    static public function sleep($seconds){}
    // todo
    static public function fread($handle,$length = null){}
    // todo
    static public function fwrite($handle,$string,$length = null){}
    // todo
    static public function fgets($handle){}
    // todo
    static public function getaddrinfo($hostname,$family = null,$socktype = null,$protocol = null,$service = null,$timeout = null){}
    // todo
    static public function readFile($filename){}
    // todo
    static public function writeFile($filename,$data,$flags = null){}
    // todo
    static public function statvfs($path){}
}