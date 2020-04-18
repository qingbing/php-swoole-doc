<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\WebSocket\Frame
 * @package      :   Swoole\WebSocket
 */

namespace Swoole\WebSocket;

class Frame
{
    /**
     * 客户端的 socket id
     * @var int
     */
    public $fd;
    /**
     * 数据内容，可以是文本内容也可以是二进制数据，可以通过opcode的值来判断
     * @var string
     */
    public $data;
    /**
     * WebSocket的OpCode类型，可以参考WebSocket协议标准文档
     * @var int
     */
    public $opcode;
    // todo property
    public $flags = '???';
    /**
     * 表示数据帧是否完整
     * @var bool
     */
    public $finish = true;

    // todo
    static public function pack($data, $opcode = null, $flags = null)
    {
    }

    // todo
    static public function unpack($data)
    {
    }

    /**
     * 魔术方法：echo $obj 时被调用
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }
}