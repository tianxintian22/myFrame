<?php
namespace Baobab\Database;

use Baobab\IDatabase;
class Mysqli implements IDatabase{
    protected $conn;
    function connect($host, $user, $passwd, $dbname){
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        mysqli_set_charset($conn, 'utf8');
        $this->conn = $conn;
    }
    
    function query($sql) {
        return mysqli_query($this->conn, $sql);
    }
    
    function fetch_result($result){
        return mysqli_fetch_all($result);
    }
    
    function close() {
        mysqli_close($this->conn);
    }
}