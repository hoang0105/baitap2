<?php
session_start();
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "webtintuc";

$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Lấy dữ liệu từ form đăng nhập
$tentl = $_GET['username'];
$tl = $_GET['ThuTu'];
$anhien = $_GET['anhien'];

// Truy vấn cơ sở dữ liệu để kiểm tra thông tin đăng nhập
$sql = "insert into theloai(TenTL,ThuTu,AnHien)values('$tentl',$tl,$anhien);";
$result = mysqli_query($conn, $sql);


// Đóng kết nối
mysqli_close($conn);+










?>