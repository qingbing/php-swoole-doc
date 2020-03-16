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
    /* @var int 连接标记 */
    public $fd = 1;
    /* @var string 传递消息 */
    public $data = '';
    /* @var int 操作代码 */
    public $opcode = 1;
    /* @var int todo */
    public $flags = 33;
    /* @var bool 消息是否完整 */
    public $finish = true;

    // todo
    static public function pack($data, $opcode = null, $flags = null)
    {
    }

    // todo
    static public function unpack($data)
    {
    }
}