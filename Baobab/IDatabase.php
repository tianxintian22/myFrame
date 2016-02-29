<?php
namespace Baobab;

interface IDatabase{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function fetch_result($result);
    function close();
}
