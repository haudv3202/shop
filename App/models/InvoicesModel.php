<?php
namespace App\models;
use App\abstracts\interact;

class InvoicesModel extends interact {
    protected $table = "invoices";
    public function create($arr = [])
    {
        $sql = "INSERT INTO $this->table (customer_name,customer_phone_number,customer_email,payment_method,total,Additional_Information) VALUES (?,?,?,?,?,?)";
        $this->db->setQuery($sql);
        $this->db->execute($arr);
        return $this->db->getLastId();
    }

    public function view($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $this->db->setQuery($sql);
        return $this->db->loadRow();
    }

    public function update($arr = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $this->db->setQuery($sql);
        $this->db->execute();
    }
}