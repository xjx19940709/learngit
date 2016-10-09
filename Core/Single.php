<?php

/**
 *文件名：Single。php
 * 单例模式
 */
//三私一共

namespace Core;
class Single
{
    private $db=null;
    //第一步 构造函数私有
    private function __construct()
    {
        $db=new mysqli('127.0.0.1');
    }
}

