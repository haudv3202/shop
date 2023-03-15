<?php
namespace App\boostrap;
use App\models\database as db;

class validate {
    public $error = [];
    public $data = [];
    protected $db;
    public function __construct() {
        $this->db = new db();
    }
    public function required($data,$name){
            if(!empty($data)){
                $this->data[] = $data;
            }else {
                 $this->error[$name][] = $data ."- This data cannot be empty";
            }
    }

    public function Email($email,$name){
        $regex = "/^[a-zA-Z.0-9]+@[a-z]+.[a-z]{3}$/";
            if(!preg_match($regex,$email)){
                $this->error[$name][] = $email ."- This email is not valid, please re-enter";
            }else {
                $this->data[] = $email;
            }

    }

    public function password($password,$name){
        $regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        if(!preg_match($regex,$password)){
            $this->error[$name][] = $password ."- The password you entered is not valid";
        }else {
            $this->data[] = $password;
        }
    }



    public function unique($table,$column,$data,$name){
           $sql = "SELECT $column FROM " . $table . " WHERE " . $column ."= '$data'";
            $this->db->setQuery($sql);
            if(empty($this->db->loadAllRows())){
                $this->data[] = $data;
            }else {
                $this->error[$name][] = $data ."- Data exits";
            }
    }


}