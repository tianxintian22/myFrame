<?php
namespace Baobab;

class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        //将db注册到注册树上
        Register::set('db1', $db);
        return $db;
    }

    static function getHacl($id){
        $key = 'user_'.$id;
        $user = \Baobab\Register::get($key);
        if(!$user){
            $user = new \Baobab\Hacl($id);
            \Baobab\Register::set($key, $user);
        }
        return $user;
    }
}