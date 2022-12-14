<?php
class UserModel extends DB {
    public function InsertNewUser($name,$email,$phone,$course) {
     $qr = "INSERT INTO student VALUES(null, '$name', '$email', '$phone', '$course')";
     $result = false;
     if(mysqli_query($this->con, $qr) ) {
        $result = true;
     }
     return json_encode($result);
    }
    // Update database
    public function edit_student($student_id,$name,$email,$phone,$course) {
        $qr = "UPDATE student SET
        name='$name', email='$email', phone='$phone', course='$course'
        WHERE id='$student_id' ";
        $result = mysqli_query($this->con, $qr);
        return $result;
    }
}
?>