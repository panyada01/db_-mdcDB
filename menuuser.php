<?php
session_start();
include("config/condb.php");
$mdc_id = $_SESSION["mdc_id"];
$mdc_name = $_SESSION["mdc_name"];
$mdc_surname = $_SESSION["mdc_surname"];
$pst_id = $_SESSION["pst_id"];
$mdc_add = $_SESSION["mdc_add"];
// $mdc_email=$_SESSION["mdc_email"];
$mdc_phone = $_SESSION["mdc_phone"];
$ps_image = $_SESSION["ps_image"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$level = $_SESSION["level"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("headboot.php") ?>

</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <!-- <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg> -->
                <img src="images/logo2.png" width="90" height="80">
                <span class="fs-4">การบริการบุคลากร</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index1.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="mdc_show.php" class=" nav-link">บัญชีแพทย์</a></li>
                <li class="nav-item"><a href="#" class="nav-link">ออกจากระบบ</a></li>
            </ul>
        </header>
    </div>

    </div>
</body>

</html>