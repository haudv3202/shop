<?php
namespace App\boostrap;
//use App\boostrap\validate;
@session_start();
class boostrap {
    protected validate $check;
    public function __construct() {
        $this->check = new validate();
    }
//    public function view($name,$status = true,$screen = "admin",$path = "",$compact = []){
//        if(file_exists("./App/views/screen/". $name .".php") && $status == true){
//            $view = "./App/views/screen/". $name .".php";
//            if($screen == "admin"){
//                require_once ('./App/views/management/index_master.php');
//            }else{
//                require_once ('./App/views/User/index_master_user.php');
//            }
//        }else if(file_exists("./App/views/screen/". $name .".php") && $status == false){
//            if(!empty($compact)){
//                $_SESSION['errors'] = $compact['errors'];
//                $_SESSION['data_old'] = $compact['data_old'];
//            }
//            require_once ("./App/views/screen/".$name.".php");
//        }else if(isset($name) && !empty($path)){
//            require_once ("./App/views/".$path."/".$name.".php");
//        }else {
//            require_once ('/App/views/screen/error/404.php');
//        }
//    }
/*validate(
[
    "username" => "required|unique:users:username",
    "password" => "required|password",
    "email" => "required|email"
]
)
 *
 *
 * */
    public function validate($dataCheck = [],$methodsForm){
            foreach ($dataCheck as $key=>$value){
                $dataForm = $this->request($key,$methodsForm);
                    $methods = explode("|",$value);
                    foreach ($methods as $keyValidate=>$check){
                        if(strpos($check, ":") !== false){
                            $unique = explode(":",$check);
                            $method1 = $unique[0];
                            $this->check->$method1($unique[1],$unique[2],$dataForm,$key);
                        }else {
                            $this->check->$check($dataForm,$key);
                        }
                    }
            }

        if(!empty($this->check->error)){
            foreach ($this->check->error as $valueError){
                foreach ($valueError as $valueData1){
                    $valueArray = explode("-",$valueData1);
                    if(in_array($valueArray[0], $this->check->data)){
                        $keyData = array_search($valueArray[0], $this->check->data);
                        unset($this->check->data[$keyData]);
                    }
                }
            }
        }
        $this->check->data = array_unique($this->check->data);
//        $this->check->data = array_values($this->check->data );
        return ["data" =>$this->check->data,"error" =>$this->check->error];

    }


    public function request($name,$methods){
                if($methods == "POST"){
                    return $_POST["$name"];
                }else {
                    return $_GET["$name"];
                }
    }

    public function validateFile($name){
        $target_dir = "./public/backend/upload/";
        $nameramdom = time().$_FILES["$name"]["name"];
        $target_file = $target_dir . $nameramdom ;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["$name"]["error"] !== 0) {
            $uploadOk = 0;
            return  [$uploadOk,"Please do not leave the image file blank.",$name];
        }

        if ($_FILES["$name"]["size"] > 500000) {
            $uploadOk = 0;
            return  [$uploadOk,"Sorry, your file is too large.",$name];
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $uploadOk = 0;
            return  [$uploadOk,"Sorry, only JPG, JPEG, PNG & GIF files are allowed.",$name];
        }

        if ($uploadOk == 0) {
            return  [0,"Sorry, your file was not uploaded.",$name];
        } else {
            if (move_uploaded_file($_FILES["$name"]["tmp_name"], $target_file)) {
                return  [1,$nameramdom,$name];
            } else {
                return  [0,"Sorry, there was an error uploading your file.",$name];
            }
        }
    }
//(object)

}