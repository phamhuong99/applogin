<?php
/*
 * khai báo hằng số kết nối đến CSDL*/
define("DB_SERVER", "localhost");
define("DB_SERVER_USERNAME", "root");
define("DB_SERVER_PASSWORD", "");
define("DB_SERVER_NAME", "demoapplogin");
//kết nối đến CSDL


$connection = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_SERVER_NAME);

//kiểm tra kết nối đên CSDL
if($connection==false){
    die("không thể kết nối đến CSDL".mysqli_connect_error());
}
?>