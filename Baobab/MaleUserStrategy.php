<?php
namespace Baobab;

class MaleUserStrategy implements UserStrategy{
    function showAd(){
        echo 'Iphone6s plus';
    }
    function showCategory(){
        echo '电子产品';
    }
}

?>