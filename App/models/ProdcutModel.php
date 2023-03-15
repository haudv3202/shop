<?php
namespace App\models;
use App\abstracts\interact;
class ProdcutModel extends interact {
    protected $table = 'products';
    public function create($arr = [])
    {
        $sql = "INSERT INTO $this->table (name,price,cate_id,short_des,detail,sale,img) VALUES (?,?,?,?,?,?,?)";
        $this->db->setQuery($sql);
        $this->db->execute($arr);
        $this->db->disconnect();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->db->setQuery($sql);
        $this->db->execute();
    }

    public function deleteCate($id)
    {
        $sql = "DELETE FROM $this->table WHERE cate_id = $id";
        $this->db->setQuery($sql);
        $this->db->execute();
    }


    public function view($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $this->db->setQuery($sql);
        return $this->db->loadRow();
    }

    public function update($arr = [])
    {
        $sql = "UPDATE $this->table SET name = ?,cate_id = ? ,price = ?,short_des = ?,detail = ?,update_date = current_timestamp(),img = ? WHERE id = ?";
        $this->db->setQuery($sql);
        $this->db->execute($arr);
        $this->db->disconnect();
    }

    public function ramdomProducts($id){
        $sql = "SELECT * FROM $this->table WHERE cate_id = '$id' ORDER BY RAND() LIMIT 5";
        $this->db->setQuery($sql);
        return $this->db->loadAllRows();
    }
}