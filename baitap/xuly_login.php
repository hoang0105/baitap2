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
$username = $_POST['username'];
$password = $_POST['password'];

// Truy vấn cơ sở dữ liệu để kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM taikhoan WHERE username = '$username' AND matkhau = '$password'";
$result = mysqli_query($conn, $sql);

// Kiểm tra số lượng bản ghi trả về
if (mysqli_num_rows($result) == 1) {
    // Đăng nhập thành công
    session_start();

    // Lưu thông tin người dùng vào phiên
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

    // Chuyển hướng người dùng đến trang chính hoặc trang khác
    header("Location: https://www.facebook.com/");
} else {
    // Đăng nhập thất bại
    echo "Tên đăng nhập hoặc mật khẩu không chính xác.";
}

// Đóng kết nối
mysqli_close($conn);
?>