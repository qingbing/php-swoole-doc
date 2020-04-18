# php-swoole-doc
php-swoole，swoole编码提示api文档

## 使用说明
- swoole版本：4.4.14
- 提供php-swoole的各类的外部调用api
- 将该包加入到php-include文件或直接放入项目中，在编码中可以起到api提示信息的左右
- 该包仅仅是针对php-swoole中各个类的调用定义，不进入项目编译等


## 使用方法
### 1、 方法一
```text
通过composer安装到项目上即可
```

### 2、 方法二
```text
用git工具clone到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

### 3、 方法三
```text
直接下载到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

## 参考链接
- API-DOC ： [https://github.com/qingbing/php-swoole-doc]
- 下载 ： [http://pecl.php.net/package/swoole]
- 官网 ： [https://www.swoole.com/]
- wiki ： [https://wiki.swoole.com]
- 文档 ： [https://www.php.net/manual/zh/class.swoole-server.php]
- 文档 ： [https://www.kancloud.cn/fage/swoole_extension/691407]

# 文档说明

# Class-List-Doc : 
#### ok-list
constant.php
#### doing-list
#### rest-list

function.php
- Swoole\Exception
- Swoole\Error
- Swoole\Event
- Swoole\Atomic
- Swoole\Atomic\Long
- Swoole\Buffer
- Swoole\Lock
- Swoole\Process
- Swoole\Process\Pool
- Swoole\Table
- Swoole\Table\Row
- Swoole\Timer
- Swoole\Timer\Iterator
- Swoole\Coroutine
- Swoole\Coroutine\Iterator
- Swoole\Coroutine\Context
- Swoole\ExitException
- Swoole\Coroutine\System
- Swoole\Coroutine\Scheduler
- Swoole\Coroutine\Channel
- Swoole\Runtime
- Swoole\Coroutine\Socket
- Swoole\Coroutine\Socket\Exception
- Swoole\Client
- Swoole\Coroutine\Client
- Swoole\Coroutine\Http\Client
- Swoole\Coroutine\Http\Client\Exception
- Swoole\Coroutine\MySQL
- Swoole\Coroutine\MySQL\Statement
- Swoole\Coroutine\MySQL\Exception
- Swoole\Coroutine\Redis
- Swoole\Server
- Swoole\Server\Task
- Swoole\Connection\Iterator
- Swoole\Server\Port
- Swoole\Http\Request
- Swoole\Http\Response
- Swoole\Http\Server
- Swoole\Coroutine\Http\Server
- Swoole\WebSocket\Server
- Swoole\WebSocket\Frame
- Swoole\WebSocket\CloseFrame
- Swoole\Redis\Server