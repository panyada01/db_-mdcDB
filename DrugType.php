<!-- ค้นหายา -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }
    </style>

    <?php
    include("headboot.php");
    ?>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">ค้นหาบัญชียา</span>
            </a>
           
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index2.php" class="nav-link active" aria-current="page">Home</a></li>
            </ul>
        </header>
    </div>
    <div class="container mt-2"> 
        <!-- <form action="mdc_insert.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm"> -->
        <div class="row g-3">

            <div class="col-md-4">
                <label for="form-laber">รหัสรูปแบบยา </label>
                <input type="text-center" class="form-control" id="dt_id" name="dt_id" placeholder="กรุณาป้อนรหัสรูปแบบยา" require>
            </div>
            

            <div class="col-md-4">
            <label for="form-laber">ชื่อรูปแบบยา </label>
                <select class="form-select" aria-label="Default select example" name="dt_name" id="dt_name">
                
                    <option selected>เลือก</option>
                    <option value="1">ยารับประทาน</option>
                    <option value="2">ยาอม</option>
                    <option value="3">ยาทาผิวหนัง</option>
                    <option value="4">ยาหยอดตา</option>
                    <option value="5">ยาล้างตา</option>
                    <option value="6">ยาป้าย</option>
                    <option value="7">ยาหยอดหู</option>
                    <option value="8">ยาหยอดจมูก</option>
                    <option value="9">ยาพ่นจมูก</option>
                    <option value="10">ยาสูดพ่นเข้าทางปาก</option>
                    <option value="11">ยาสอด/สววนทวารหนัก</option>
                    <option value="12">ยาสอดช่องคลอด</option>
                    <option value="13">ยาแฟ่นแปะผิวหนัง</option>
                    <option value="14">ยาฉีด</option>

                </select>
            </div>

            <div class="col-md-4">
                <label for="form-laber">วิธีการใช้ </label>
                <input type="text-center" class="form-control" id="dt_use" name="dt_use" placeholder="กรุณาป้อนรหัสรูปแบบยา" require>
            </div>


            <div class="col-md-8">
                <span class="form-laber"> .</span>
                <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">
            </div>








        </div>

        <?php include("footboot.php") ?>

</body>

</html>