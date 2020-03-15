<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\WebSocket\CloseFrame
 * @package      :   Swoole\WebSocket
 */
namespace Swoole\WebSocket;

class CloseFrame extends Frame
{
    // todo property
    public $fd = '???';
    // todo property
    public $data = '???';
    // todo property
    public $flags = '???';
    // todo property
    public $finish = '???';
    // todo property
    public $opcode = '???';
    // todo property
    public $code = '???';
    // todo property
    public $reason = '???';
    // todo
    static public function pack($data,$opcode = null,$flags = null){}
    // todo
    static public function unpack($data){}
    // todo
    public function __toString(){}
}