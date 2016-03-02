<?php
namespace Baobab;

class Hacl{
    public $id;
    public $haclname;
    public $haclcode;
    public $hacls;
    protected $db;

    /**
     * Hacl constructor.
     * @param $id
     */
    function __construct($id){
        $this->db = new \Baobab\Database\Mysqli();
        $this->db->connect('127.0.0.1', 'root', '', 'test');
        $res = $this->db->query("select * from ha_cl where id = {$id}");
        $data = $res->fetch_assoc();
        $this->id = $data['ID'];
        $this->haclname = $data['ha_cl_name'];
        $this->haclcode = $data['ha_cl_code'];
        $this->hacls = $data['hacls'];
    }
    function __destruct(){
        $this->db->query("update ha_cl set
                          ha_cl_code = '{$this->haclcode}',
                          ha_cl_name = '{$this->haclname}',
                          hacls = '{$this->hacls}'
                          where ID = {$this->id}
                          limit 1");
    }

}