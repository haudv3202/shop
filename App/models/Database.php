<?php
namespace App\models;
require_once("config.php");
use \PDO;
use \PDOException;
class Database
{
    protected $pdo = NULL;
    protected $sql = '';
    protected $sta = NULL;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PWD);
            $this->pdo->query('set names "utf8"');
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function setQuery($sql)
    {
        $this->sql = $sql;
    }

    //Hàm chạy câu lệnh truy vấn
    public function execute($options = array())
    {
        $this->sta = $this->pdo->prepare($this->sql);
        if ($options) {
//            nếu có biến options thì nó sẽ chạy vòng lặp
            for ($i = 0; $i < count($options); $i++) {
                $this->sta->bindParam($i + 1, $options[$i]);
            }
//            Sau khi chạy xong vòng lặp thì nó sẽ liên kết các tham số vào câu lệnh đã chuẩn bị trước
        }
//        print_r($this->sta);
//        die();
        $this->sta->execute();
//        Thực hiện câu lệnh truy vấn
        return $this->sta;
    }

    //load nhiều dữ liệu
    public function loadAllRows($options = array())
    {
        if (!$options) {
//            nếu $options truyền vào khác array thì trả về false luôn
            if (!$result = $this->execute())
                return false;
        } else {
            if (!$result = $this->execute($options))
                return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    //Funtion load 1 data on the table
    public function loadRow($option = array())
    {
        if (!$option) {
            if (!$result = $this->execute())
                return false;
        } else {
            if (!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }

    //Hàm trả về 1 bản ghi trong bảng
    public function loadRecord($option = array())
    {
        if (!$option) {
            if (!$result = $this->execute())
                return false;
        } else {
            if (!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
// trả về Tên của đối tượng chuỗi mà ID sẽ được thêm vào
    public function getLastId()
    {
        return $this->pdo->lastInsertId();
    }

    public function disconnect()
    {
        $this->sta = NULL;
        $this->pdo = NULL;
    }
}
