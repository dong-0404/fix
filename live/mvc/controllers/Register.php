<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Register extends Controller
{

    public $SinhVienModel;
    public $UserModel;

    public function __construct()
    {
        // call model
        $this->SinhVienModel = $this->model("SinhVienModel");
        $this->UserModel = $this->model("UserModel");
    }
    public function SayHi()
    {
        // call view
        //echo "1";
        //var_dump($this->SinhVienModel->SinhVien());
        //var_dump($this->SinhVienModel->StudentInfor());
        $this->view("aodep", [
            "Page" => "register",
           // "sinhvienmodel" => $this->SinhVienModel->SinhVien()
        ]);
    }
    public function Addinfor()
    {
        // echo "khach hàng đăng kí";
        // var_dump($this->UserModel->Dong());
        // 1. get data khách hàng nhập
        if (isset($_POST["save_student"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $course = $_POST['course'];

            // 2.Insert database bằng user
            $kq = $this->UserModel->InsertNewUser($name, $email, $phone, $course);
            // echo $kq ;
        }
        $this->view("aodep", [
            "Page" => "register",
            //"sinhvienmodel" => $this->SinhVienModel->SinhVien(),
            "result" => $kq
        ]);
    }
}
?>