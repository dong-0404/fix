<?php
class SinhVienModel extends DB {
    public function SinhVien () {
        $qr = "SELECT * FROM Student";
        $result = mysqli_query($this->con, $qr);
        $mang= array();
        while($row = mysqli_fetch_assoc($result)) {
            $mang[] = $row;
        }
        return $mang;
    }
    // hàm lấy từng sinh viên
    public function Get_Student ($id) {
        $qr = "SELECT * FROM Student WHERE id = {$id}";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($result)) {
            $mang[] = $row;
        }
        return $mang;
    }
}
?>