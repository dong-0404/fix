<?php
class DB {
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "blog";
    function __construct()
    {
    $this->con = mysqli_connect(
        $this->servername,
        $this->username,
        $this->password
    );
    mysqli_select_db(
        $this->con,
        $this->dbname
    );
    // xử lí truy vấn UTF8 để tránh lỗi font
    mysqli_query(
        $this->con, 
        "SET character_set_results = 'utf8',character_set_database = 'utf8', character_set_server = 'utf8'"
        ) ;   
    }
}
?>