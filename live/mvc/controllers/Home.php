<?php
class Home extends Controller {
  public $SinhVienModel;
  public $UserModel;

public function __construct() 
{
    $this->SinhVienModel = $this->model("SinhVienModel");
    $this->UserModel = $this->model("UserModel");
}
public function Show ()
{
    $this->view ("aodep", [
        "Page" => "home",
        //"sinhvienmodel" => $this->SinhVienModel->SinhVien()
    ]);
}

}