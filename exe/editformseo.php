<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $idbangnhap = $_POST['idbangnhap'];
        $date = $_POST['ngaythang'];
        $tongsokhachtuvan = $_POST['tongsokhachtuvan'];
        $khonghieuqua = $_POST['khonghieuqua'];
        $hieuqua = $_POST['hieuqua'];
        $dathen = $_POST['dathen'];
        $dt=date_create($date);
        $jw = date_format($dt,"Y-m-d");
       $sql = "UPDATE `bangnhapseo` SET `ngaythang`='$jw',`tongsokhachtuvan`='$tongsokhachtuvan',`hieuqua`='$hieuqua',`khonghieuqua`='$khonghieuqua',`dathen`='$dathen' WHERE id='$idbangnhap'";
           
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xử lý :: Lưu dữ liệu vào hệ thống - Hệ thống báo biểu :: Bảng quản trị</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="content" style="width:100%;text-align:center;margin-top: 10%;">
            <img src="https://loading.io/spinners/pies/lg.pie-chart-loading-gif.gif" style="margin:0 auto;display:block;text-align:center;">
            <p>LƯU DỮ LIỆU VÀO HỆ THỐNG</p>
            <p style="color:red;font-weight:bolder;">VUI LÒNG CHỜ 2s KIỂM TRA DỮ LIỆU...</p>
        </div>
    </body>
</html>
<?php

    $conn->query($sql);
    $_SESSION['flash'] = "<div class='alert alert-success' style='width:100%;'><b>Đã cập nhật số liệu vào Cơ sở dữ liệu</b></div>";
    header("Refresh:2; url=../index.php?view=seo");

?>
