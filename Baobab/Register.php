<?php
namespace Baobab;

class Register{
    protected static $objects;
    static function set($alias, $object){
        self::$objects[$alias] = $object;
    }
    
    static function _unset($alias) {
        unset(self::$objects[$alias]);
    }
    
    static function get($name) {
        return self::$objects[$name];
    }
}