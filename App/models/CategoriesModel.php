<?php
namespace App\models;
use App\abstracts\interact;

class CategoriesModel extends  interact {
        protected $table = 'categories';

        public function create($arr = []){
            $sql = "INSERT INTO $this->table (cate_name,slug,descs,created_by) VALUES (?,?,?,?)";
            $this->db->setQuery($sql);
            $this->db->execute($arr);
            $this->db->disconnect();
        }

        public function delete($id)
        {
            $sql = "DELETE FROM $this->table WHERE id = $id";
            $this->db->setQuery($sql);
            $this->db->execute();
            $this->db->disconnect();
        }

        public function view($id){
            $sql = "SELECT * FROM $this->table WHERE id = $id";
            $this->db->setQuery($sql);
            return $this->db->loadRow();
        }

        public function update($arr = [])
        {
            $sql = "UPDATE $this->table SET  cate_name = ?,slug = ? ,descs = ?,update_date = current_timestamp() WHERE id = ?";
            $this->db->setQuery($sql);
            $this->db->execute($arr);
            $this->db->disconnect();
        }
}