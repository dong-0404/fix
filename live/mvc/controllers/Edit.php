<?php
class Edit extends Controller {
    public $SinhVienModel;
    public $UserModel;

    public function __construct() {
        $this->SinhVienModel = $this->model("SinhVienModel");
        $this->UserModel = $this->model("UserModel");
    }

    public function Web () {
        $this->view("aodep", [
            "Page" => "Edit",
            "sinhvienmodel" => $this->SinhVienModel->SinhVien()

        ]);
    }
    public function Edit_SinhVien() {
        // 1, get data khach hàng nhập
       if (isset($_POST['update_student'])) {
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone=$_POST['phone'];
        $course=$_POST['course'];

       // $this->SinhVienModel->Get_Student ($student_id);
        $this->UserModel->edit_student($student_id,$name,$email,$phone,$course) ;
       } 
    }
}
?>
                        