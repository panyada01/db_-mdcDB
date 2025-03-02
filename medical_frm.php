<!-- ตารางข้อมูลบุคลากรทางการแพทย์ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

    * {
        font-family: 'IBM Plex Sans Thai Looped', sans-serif;
        font-family: 'Prompt', sans-serif;
    }
</style>
<?php
include("headboot.php");
?>
</head>

<body>
    <div class="container mt-2">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="mdc_insert.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-laber">รหัสบุคลากรทางการแพทย์</label>
                    <input type="text-center" class="form-control" id="mdc_id" name="mdc_id" placeholder="กรุณาป้อนรหัสบุคลากรทางการแพทย์" require>
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

                <div class="col-md-4">
                    <span class="form-laber">ยืนยันว่าไม่ใช่ AI </span>
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="user" checked> 
                    <input class="form-check-input" type="radio" name="level" id="level" value=" ">
                </div>

                <div class="col-md-8">
                    <span class="form-laber"> .</span>
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">
                </div>


            </div>

        </form>

    </div>



    <?php include("footboot.php"); ?>
</body>

</html>