<?php
namespace Baobab;

class Page{
    protected $strategy;
    function Index(){
        $this->strategy->showAd();
        echo '<br/>';
        $this->strategy->showCategory();
    }
    function setStrategy(\Baobab\UserStrategy $strategy){
        $this->strategy = $strategy;
    }
}