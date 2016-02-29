<?php
namespace Baobab\Database;

use Baobab\IDatabase;
class Pdo implements IDatabase{
    protected $conn;
    function connect($host, $user, $passwd, $dbname){
       $conn =  new \PDO("mysql:dbname=$dbname;host=$host", $user, $passwd);
       $this->conn = $conn;
    }
    
    function query($sql){
        return $this->conn->query($sql);
    }
    
    function fetch_result($result){
        
    }
    
    function close() {
        unset($this->conn);
    }
}
