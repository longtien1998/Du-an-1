<?php
session_start();
include './config/connect.php';
include './dao/pdo.php';
include './thuvien/user.php';
include './dao/userDAO.php';
include './dao/nhanvien.php';
include './dao/room.php';
include './dao/khachhang.php';
include './dao/danh-gia.php';


?>
<?php


// Set the new timezone
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d');



$sum = 0;
if (isset($_SESSION['giohang']) && isset($_SESSION['giohang']) > 0) {
    foreach ($_SESSION['giohang'] as $item) {
        $sum += $item[8];
    }
}

?>

<?php

if (!isset($_GET["action"])) $_GET["action"] = "home";
// khởi tạo biên session

// session_start();
// kiểm tra xem sessionuser có tồn tại không ?
$user = '<a href="/index.php?action=login">Đăng nhập</a>';
if (isset($_SESSION["user"])) {


    // Thực thi truy vấn
    $result = useradmin($_SESSION["user"]);

    // Kiểm tra kết quả trả về
    if (mysqli_num_rows($result) > 0) {

        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $user = '<span>Xin Chào </span>Admin <a class="user" href="/index.php?action=user">' . $_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
    } else {
        $result = usernhanvien($_SESSION["user"]);
        if (mysqli_num_rows($result) > 0) {
            $user = '<span>Xin Chào </span>Nhân Viên <a class="user" href="/index.php?action=usernv">' . $_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
        } else {
            $result = userKH($_SESSION["user"]);
            if (mysqli_num_rows($result) > 0) {
            $user = '<span>Xin Chào </span> <a class="user" href="/index.php?action=userkh">' . $_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
            } else $user = '<a href="/index.php?action=login">Đăng nhập</a>';
        } 
    }
} else  $user = '<i class="fa-regular fa-circle-user fa-flip" style="color: #050505; font-size: 25px;"></i><a href="/index.php?action=login">Đăng nhập</a>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONCHA - Best Hotel</title>

    <link rel="stylesheet" href="../public/bootstrap.min.css">
    <!-- <script src="../public/bootstrap.js"></script> -->

    <link rel="stylesheet" href="../content/css/main.css">
    <link rel="stylesheet" href="../content/css/room.css">
    <link rel="stylesheet" href="../content/css/login_re.css">

    <script src="https://kit.fontawesome.com/db4ae7b83e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="container-fluid"> -->

    <div class="row justify-content-around p-2 mr-0 content-top">
        <div class="row col-lg-8 d-none d-lg-flex">
            <div class="mx-3">
                <a href="https://maps.app.goo.gl/fh5dNJN5qoVMQett6" target="_blank">
                    <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                    260 Võ Nguyên Giáp, Phường Mỹ An, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam
                </a>
            </div>
            <div class="mx-3">
                <a href="">
                    <i class="fa-solid fa-phone-volume" style="color: #000000;"></i>
                    Liên hệ trực tiếp với chúng tôi tại (+84) 982 268 784
                </a>
            </div>
        </div>
        <div class="row col-lg-4">
            <div class="col-9">
                <?php echo $user; ?>
            </div>
            <div class="col-2">
                <a href="index.php?action=addcart" class="row text-decoration-none"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                    <span class="thongbao d-flex justify-content-center align-items-center p-3"><?php echo $sum; ?></span>
                </a>
            </div>
            <div class="icon-show col-1  d-inline d-lg-none" data-toggle="sidebar">
                <i class="fa-solid fa-bars" style="color: #000000;"></i>
            </div>
        </div>

    </div>
    <header class="card-header  row justify-content-around mr-0">
        <div class=" logo mx-5 text-center ">
            <a href="/index.php" style="text-decoration: none;">
                <h1>BONCHA</h1>
                <p>Best - Hotel</p>
            </a>
        </div>
        <div class="navbar justify-content-center p-0">
            <?php
            // $_GET["action"]="home";
            $a1 = "";
            $a2 = "";
            $a3 = "";
            $a4 = "";
            $a5 = "";
            $a6 = "";
            $a7 = "";
            if ($_GET["action"] === 'home') $a1 = "active";
            else if ($_GET["action"] === 'gioithieu')  $a2 = 'active';
            else if ($_GET["action"] === 'phong')  $a3 = 'active';
            else if ($_GET["action"] === 'timphong')  $a4 = 'active';
            else if ($_GET["action"] === 'nhahang')  $a5 = 'active';
            else if ($_GET["action"] === 'service')  $a6 = 'active';
            else if ($_GET["action"] === 'contact')  $a7 = 'active';

            ?>

            <a href="/index.php?action=home" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a1; ?>">Trang chủ</a>
            <a href="/index.php?action=gioithieu" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a2; ?>">Về Chúng Tôi</a>
            <a href="/index.php?action=phong" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a3; ?>">Phòng</a>
            <a href="/index.php?action=timphong" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a4; ?>">Tìm phòng</a>
            <a href="/index.php?action=nhahang" class="text-black-50  text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a5; ?>">Nhà hàng & Bar</a>
            <a href="/index.php?action=service" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a6; ?>">Dịch Vụ</a>
            <a href="/index.php?action=contact" class="text-black-50 text-uppercase text-decoration-none hover-color lead m-2 <?php echo $a7; ?>">Liên lạc</a>


        </div>
        <div class=" align-self-center text-center py-4">
            <button class="custom-buy3 buy-3 nutmua "><span><a style="text-decoration: none; " href="/index.php?action=timphong"><span class="dat">ĐẶT NGAY</span></a></span></button>
        </div>
    </header>