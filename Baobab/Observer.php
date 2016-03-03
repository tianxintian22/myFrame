<?php
namespace Baobab;
/**
 * Class Observer 观察者，观察的对象是事件发生者
 * @package Baobab
 */
interface Observer{
    /**
     * @param null $event_info  事件的信息，默认为null
     * 表示事件发生后进行更新的操作
     */
    function update($event_info = null);
}