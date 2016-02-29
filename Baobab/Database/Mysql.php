<?php
namespace Baobab\Database;

use Baobab\IDatabase;
class Mysql implements IDatabase{
    protected $conn;
    function connect($host, $user, $passwd, $dbname){
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }
    
    function query($sql) {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }
    
    function fetch_result($result){
        
    }
    
    function close() {
        mysql_close($this->conn);
    }
}