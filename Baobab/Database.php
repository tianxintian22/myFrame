<?php
namespace Baobab;

class Database{
   
    protected static $db;
    
    private function __construct(){
        
    }
    
    static function getInstance(){
        if (self::$db){
            return self::$db;
        }else{
            //self是指向类本身，也就是self是不指向任何已经实例化的对象(::域运算符号)
            self::$db = new self();
            return self::$db;
        }
    }
    
    function where($where){
        return $this;
    }
    
    function order($order) {
        return $this;
    }
    
    function limit($limit){
        return $this;
    }
}