<?php
namespace Baobab;

class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        //将db注册到注册树上
        Register::set('db1', $db);
        return $db;
    }
}