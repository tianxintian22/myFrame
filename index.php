<?php
header("Content-Type: text/html; charset=UTF-8");
define('BASEDIR',__DIR__);
require BASEDIR.'/Baobab/Loader.php';
spl_autoload_register('\\Baobab\\Loader::autoload');

//Baobab\Object::test();
//App\Controller\Home\Index::test();

//php链式操作
// $db = new Baobab\Database();
// $db->where('id = 1')->order('order by id')->limit(1);

//魔术方法
// $obj = new baobab\Object();
// $obj->title = 'hello';
// echo $obj->title;

// echo $obj->test1('hello', 123);
// echo $obj::test1('hello1', 1234);
// echo $obj;
// echo $obj('test1');


/**
 * 适配器模式
 */
// $db = new Baobab\Database\Mysqli();
// $db->connect('127.0.0.1', 'root', '', 'test');
// $res = $db->query('select * from ha_cl');
// print_r($db->fetch_result($res));
// $db->close();

/**
 * 工厂模式
 */
// $db = Baobab\Factory::createDatabase();
// $db->limit(1);

/**
 * 注册树模式
 */
// $db = Baobab\Register::get('db1');
// $db->limit(1);

/**
 * 单例模式
 */
// $db = Baobab\Database::getInstance();

/**
 * 策略模式
 */

// $page = new Baobab\Page();
// if (isset($_GET['female'])){
//     $strategy = new Baobab\FemaleUserStrategy();
// }else{
//     $strategy = new Baobab\MaleUserStrategy();
// }
// $page->setStrategy($strategy);
// $page->Index();

/**
 * 数据对象映射模式
 */
class Page{
    function index(){
        $hacl = Baobab\Factory::getHacl(13);
        $hacl->haclname = '测试名称11123';
        $this->test();
        echo 'ok';
    }

    function test(){
        $hacl = Baobab\Factory::getHacl(13);
        $hacl->hacls = '测试案例22234';
    }
}

//$page = new Page();
//$page->index();

/**
 * 观察者模式
 */

class Event extends \Baobab\EventGenerator{
    /**
     *触发一个新的事件
     */
    function trigger(){
        echo 'Event发生';
        $this->notify();
    }
}

/**
 * 观察者
 */
class Observer1 implements \Baobab\Observer{
    function Update($event_info = null){
        echo '更新操作代码1';
    }
}

class Observer2 implements \Baobab\Observer{
    function Update($event_info = null){
        echo '更新操作代码2';
    }
}

//$event = new Event();
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//$event->trigger();

/**
 *  原型模式
 */
$prototype = new Baobab\Canvas();
$prototype->init();


$canvas1 = clone $prototype;
$canvas1->rect(3,6,4,12);
$canvas1->draw();
echo '===================<br/>';
$canvas2 = clone $prototype;
$canvas2->rect(3,6,4,12);
$canvas2->draw();

