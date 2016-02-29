<?php
namespace Baobab;

class Object{
    static function test(){
        echo 'I am object->test()';
    }
    
    protected $array = array();
    function __set($key, $value){
        $this->array[$key] = $value;
    }
    function __get($key){
        //echo __METHOD__;
        return $this->array[$key];
    }
    
    function __call($func, $param){
        //var_dump($func,$param);
        return 'magic function';
    }
    
    static function __callstatic($func, $param) {
        var_dump($func, $param);
        return 'magic static function';
    }
    
    function __toString(){
        return __CLASS__;
    }
    
    function __invoke($param) {
        return var_dump($param);
    }
    
}