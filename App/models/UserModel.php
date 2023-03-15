<?php
namespace App\models;
use App\abstracts\interact;
class UserModel extends interact {
    protected $table = 'users';
    public function findUser($id){
        $sql = "SELECT fullname FROM $this->table WHERE id = $id";
        $this->db->setQuery($sql);
       return $this->db->loadRow();
    }

    public function create($arr = []){
        $sql = "INSERT INTO users (fullname,username,email,password,role_id) VALUES (?,?,?,?,?)";
        $this->db->setQuery($sql);
        $this->db->execute($arr);
        $this->db->disconnect();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function view($id){

    }

    public function update($arr = [])
    {
        // TODO: Implement update() method.
    }

    public function checklogin($name){
        $sql = "SELECT * FROM users WHERE username = '$name'";
        $this->db->setQuery($sql);
        return $this->db->loadAllRows();
    }
}