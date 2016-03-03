<?php
namespace Baobab;
/**
 * Class EventGenerator 基类，事件发生者
 */
abstract class EventGenerator{

    //观察者对于事件发生者是不可见的，事件发生者不关心有哪些观察者关注了事件
    private $observers = array();

    /**
     * 添加观察者
     */
    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }

    /**
     *逐个通知观察者进行更新的操作
     */
    function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}