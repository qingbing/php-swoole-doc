<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Redis
 * @package      :   Swoole\Coroutine
 */
namespace Swoole\Coroutine;

class Redis
{
    // todo property
    public $host = '???';
    // todo property
    public $port = '???';
    // todo property
    public $setting = '???';
    // todo property
    public $sock = '???';
    // todo property
    public $connected = '???';
    // todo property
    public $errType = '???';
    // todo property
    public $errCode = '???';
    // todo property
    public $errMsg = '???';
    // todo
    public function __construct($config = null){}
    // todo
    public function __destruct(){}
    // todo
    public function connect($host,$port = null,$serialize = null){}
    // todo
    public function getAuth(){}
    // todo
    public function getDBNum(){}
    // todo
    public function getOptions(){}
    // todo
    public function setOptions($options){}
    // todo
    public function getDefer(){}
    // todo
    public function setDefer($defer){}
    // todo
    public function recv(){}
    // todo
    public function request($params){}
    // todo
    public function close(){}
    // todo
    public function set($key,$value,$timeout = null,$opt = null){}
    // todo
    public function setBit($key,$offset,$value){}
    // todo
    public function setEx($key,$expire,$value){}
    // todo
    public function psetEx($key,$expire,$value){}
    // todo
    public function lSet($key,$index,$value){}
    // todo
    public function get($key){}
    // todo
    public function mGet($keys){}
    // todo
    public function del($key,$other_keys = null){}
    // todo
    public function hDel($key,$member,$other_members = null){}
    // todo
    public function hSet($key,$member,$value){}
    // todo
    public function hMSet($key,$pairs){}
    // todo
    public function hSetNx($key,$member,$value){}
    // todo
    public function delete($key,$other_keys = null){}
    // todo
    public function mSet($pairs){}
    // todo
    public function mSetNx($pairs){}
    // todo
    public function getKeys($pattern){}
    // todo
    public function keys($pattern){}
    // todo
    public function exists($key,$other_keys = null){}
    // todo
    public function type($key){}
    // todo
    public function strLen($key){}
    // todo
    public function lPop($key){}
    // todo
    public function blPop($key,$timeout_or_key,$extra_args = null){}
    // todo
    public function rPop($key){}
    // todo
    public function brPop($key,$timeout_or_key,$extra_args = null){}
    // todo
    public function bRPopLPush($src,$dst,$timeout){}
    // todo
    public function lSize($key){}
    // todo
    public function lLen($key){}
    // todo
    public function sSize($key){}
    // todo
    public function scard($key){}
    // todo
    public function sPop($key){}
    // todo
    public function sMembers($key){}
    // todo
    public function sGetMembers($key){}
    // todo
    public function sRandMember($key,$count = null){}
    // todo
    public function persist($key){}
    // todo
    public function ttl($key){}
    // todo
    public function pttl($key){}
    // todo
    public function zCard($key){}
    // todo
    public function zSize($key){}
    // todo
    public function hLen($key){}
    // todo
    public function hKeys($key){}
    // todo
    public function hVals($key){}
    // todo
    public function hGetAll($key){}
    // todo
    public function debug($key){}
    // todo
    public function restore($ttl,$key,$value){}
    // todo
    public function dump($key){}
    // todo
    public function renameKey($key,$newkey){}
    // todo
    public function rename($key,$newkey){}
    // todo
    public function renameNx($key,$newkey){}
    // todo
    public function rpoplpush($src,$dst){}
    // todo
    public function randomKey(){}
    // todo
    public function pfadd($key,$elements){}
    // todo
    public function pfcount($key){}
    // todo
    public function pfmerge($dstkey,$keys){}
    // todo
    public function ping(){}
    // todo
    public function auth($password){}
    // todo
    public function unwatch(){}
    // todo
    public function watch($key,$other_keys = null){}
    // todo
    public function save(){}
    // todo
    public function bgSave(){}
    // todo
    public function lastSave(){}
    // todo
    public function flushDB(){}
    // todo
    public function flushAll(){}
    // todo
    public function dbSize(){}
    // todo
    public function bgrewriteaof(){}
    // todo
    public function time(){}
    // todo
    public function role(){}
    // todo
    public function setRange($key,$offset,$value){}
    // todo
    public function setNx($key,$value){}
    // todo
    public function getSet($key,$value){}
    // todo
    public function append($key,$value){}
    // todo
    public function lPushx($key,$value){}
    // todo
    public function lPush($key,$value){}
    // todo
    public function rPush($key,$value){}
    // todo
    public function rPushx($key,$value){}
    // todo
    public function sContains($key,$value){}
    // todo
    public function sismember($key,$value){}
    // todo
    public function zScore($key,$member){}
    // todo
    public function zRank($key,$member){}
    // todo
    public function zRevRank($key,$member){}
    // todo
    public function hGet($key,$member){}
    // todo
    public function hMGet($key,$keys){}
    // todo
    public function hExists($key,$member){}
    // todo
    public function publish($channel,$message){}
    // todo
    public function zIncrBy($key,$value,$member){}
    // todo
    public function zAdd($key,$score,$value){}
    // todo
    public function zPopMin($key,$count){}
    // todo
    public function zPopMax($key,$count){}
    // todo
    public function bzPopMin($key,$timeout_or_key,$extra_args = null){}
    // todo
    public function bzPopMax($key,$timeout_or_key,$extra_args = null){}
    // todo
    public function zDeleteRangeByScore($key,$min,$max){}
    // todo
    public function zRemRangeByScore($key,$min,$max){}
    // todo
    public function zCount($key,$min,$max){}
    // todo
    public function zRange($key,$start,$end,$scores = null){}
    // todo
    public function zRevRange($key,$start,$end,$scores = null){}
    // todo
    public function zRangeByScore($key,$start,$end,$options = null){}
    // todo
    public function zRevRangeByScore($key,$start,$end,$options = null){}
    // todo
    public function zRangeByLex($key,$min,$max,$offset = null,$limit = null){}
    // todo
    public function zRevRangeByLex($key,$min,$max,$offset = null,$limit = null){}
    // todo
    public function zInter($key,$keys,$weights = null,$aggregate = null){}
    // todo
    public function zinterstore($key,$keys,$weights = null,$aggregate = null){}
    // todo
    public function zUnion($key,$keys,$weights = null,$aggregate = null){}
    // todo
    public function zunionstore($key,$keys,$weights = null,$aggregate = null){}
    // todo
    public function incrBy($key,$value){}
    // todo
    public function hIncrBy($key,$member,$value){}
    // todo
    public function incr($key){}
    // todo
    public function decrBy($key,$value){}
    // todo
    public function decr($key){}
    // todo
    public function getBit($key,$offset){}
    // todo
    public function lInsert($key,$position,$pivot,$value){}
    // todo
    public function lGet($key,$index){}
    // todo
    public function lIndex($key,$integer){}
    // todo
    public function setTimeout($key,$timeout){}
    // todo
    public function expire($key,$integer){}
    // todo
    public function pexpire($key,$timestamp){}
    // todo
    public function expireAt($key,$timestamp){}
    // todo
    public function pexpireAt($key,$timestamp){}
    // todo
    public function move($key,$dbindex){}
    // todo
    public function select($dbindex){}
    // todo
    public function getRange($key,$start,$end){}
    // todo
    public function listTrim($key,$start,$stop){}
    // todo
    public function ltrim($key,$start,$stop){}
    // todo
    public function lGetRange($key,$start,$end){}
    // todo
    public function lRange($key,$start,$end){}
    // todo
    public function lRem($key,$value,$count){}
    // todo
    public function lRemove($key,$value,$count){}
    // todo
    public function zDeleteRangeByRank($key,$start,$end){}
    // todo
    public function zRemRangeByRank($key,$min,$max){}
    // todo
    public function incrByFloat($key,$value){}
    // todo
    public function hIncrByFloat($key,$member,$value){}
    // todo
    public function bitCount($key){}
    // todo
    public function bitOp($operation,$ret_key,$key,$other_keys = null){}
    // todo
    public function sAdd($key,$value){}
    // todo
    public function sMove($src,$dst,$value){}
    // todo
    public function sDiff($key,$other_keys = null){}
    // todo
    public function sDiffStore($dst,$key,$other_keys = null){}
    // todo
    public function sUnion($key,$other_keys = null){}
    // todo
    public function sUnionStore($dst,$key,$other_keys = null){}
    // todo
    public function sInter($key,$other_keys = null){}
    // todo
    public function sInterStore($dst,$key,$other_keys = null){}
    // todo
    public function sRemove($key,$value){}
    // todo
    public function srem($key,$value){}
    // todo
    public function zDelete($key,$member,$other_members = null){}
    // todo
    public function zRemove($key,$member,$other_members = null){}
    // todo
    public function zRem($key,$member,$other_members = null){}
    // todo
    public function pSubscribe($patterns){}
    // todo
    public function subscribe($channels){}
    // todo
    public function unsubscribe($channels){}
    // todo
    public function pUnSubscribe($patterns){}
    // todo
    public function multi(){}
    // todo
    public function exec(){}
    // todo
    public function eval($script,$args = null,$num_keys = null){}
    // todo
    public function evalSha($script_sha,$args = null,$num_keys = null){}
    // todo
    public function script($cmd,$args = null){}
}