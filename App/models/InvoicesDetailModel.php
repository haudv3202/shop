<?php
namespace App\models;
use App\abstracts\interact;
class InvoicesDetailModel extends interact {
    protected $table = "invoice_detail";
    public function create($arr = [])
    {
        $sql = "INSERT INTO $this->table (invoice_id,product_id,quantity,unit_price) VALUES (?,?,?,?)";
        $this->db->setQuery($sql);
        $this->db->execute($arr);
    }

    public function view($id)
    {
        $sql = "SELECT * FROM $this->table WHERE invoice_id = ?";
        $this->db->setQuery($sql);
        return $this->db->loadAllRows($id);
    }

    public function update($arr = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE invoice_id = $id";
        $this->db->setQuery($sql);
        $this->db->execute();
    }
}