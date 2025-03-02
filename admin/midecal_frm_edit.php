<?php
session_start();
require("logintrue.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มแก้ไข</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot_us.php");
    include('config/condb.php');
    if ($_GET["mdc_id"] == '') {
        echo "<script type='text/javascript'>";
        echo "alert('Error Contact Admin !!');";
        echo "window.location = 'midecal_show.php'; ";
        echo "</script>";
    }
    $mdc_id = mysqli_real_escape_string($conn, $_GET['mdc_id']);
    $query = "SELECT * FROM tbl_person WHERE mdc_id=$mdc_id" or die("Error:" . mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    extract($row);    ?>

</head>

<body>
    <h1> รหัสที่ส่งมาคือ <?php echo $mdc_id; ?> </h1>
    <?php include("navbar.php"); ?>

    <div class="container mt-2">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="mdc_insert.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-laber">รหัสบุคลากรทางการแพทย์</label>
                    <input type="text-center" class="form-control" id="h_mdc_id" name="h_mdc_id" placeholder="กรุณาป้อนรหัสบุคลากรทางการแพทย์" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">รหัสตำแหน่ง</label>
                    <input type="text" class="form-control" id="pst_id" name="pst_id" placeholder="กรุณาป้อนรหัสตำแหน่ง" require>
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="mdc_email " name="mdc_email " placeholder="name@example.com">
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ชื่อ</label>
                    <input type="text" class="form-control" id="mdc_name" name="mdc_name" placeholder="กรุณาป้อนชื่อ" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">นามสกุล</label>
                    <input type="text" class="form-control" id="mdc_surname" name="mdc_surname" placeholder="กรุณาป้อนนามสกุล" require>
                </div>

                <div class="col-md-4">
                    <span class="form-laber">เบอร์โทร</span>
                    <input type="text" class="form-control" id="mdc_phone" name="mdc_phone" placeholder="กรุณาป้อนเบอร์โทร">
                </div>

                <div class="col-md-4">
                    <span class="form-laber"> ที่อยู่ </span>
                    <textarea class="form-control" aria-label="With textarea" name="mdc_add" id="mdc_add">   </textarea>
                </div>

                <div class="col-md-4">
                    <span class="form-laber">ชื่อผู้ใช้งาน</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="กรุณาป้อนชื่อผู้ใช้งาน">
                </div>

                <div class="col-md-4">
                    <span class="form-laber">รหัสผ่าน</span>
                    <input type="text" class="form-control" id="password" name="password" placeholder="กรุณาป้อนรหัสผ่าน    ">
                </div>
                <div class="col-md-4">
                    <span class="form-laber">รูปภาพบุคลากร</span>
                    <input class="form-control form-control-lg" id="ps_image" name="ps_image" type="file">
                </div>

                <div class="col-md-8">
                    <span class="form-laber"> .</span>
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">
                </div>

            </div>



        </form>

    </div>






    <?php include("footboot_us.php"); ?>

</body>

</html>