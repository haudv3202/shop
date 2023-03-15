<?php
namespace App\abstracts;

use App\models\Database;

abstract class interact {
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    abstract function create($arr = []);
    abstract function delete($id);
    abstract function view($id);
    abstract function update($arr = []);
    public static function allData(){
        $db = new static;
        $sql = "SELECT * FROM $db->table ";
        $db->db->setQuery($sql);
        return $db->db->loadAllRows();
    }
}
