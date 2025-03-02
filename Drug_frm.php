<!-- ตารางบัญชียา เพิ่มข้อมูลยา -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางบัญชียา</title>
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
            <div class="text-center">จัดการข้อมูลยา </div>
        </h1>
        <form action="Drug_insert.php" method="POST" enctype="multipart/form-data" name="Drug_frm" id="Drug_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-laber">รหัสยา</label>
                    <input type="text-center" class="form-control" id="drug_id" name="drug_id" placeholder="กรุณาป้อนรหัสยา" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ชื่อยาไทย</label>
                    <input type="text-center" class="form-control" id="drug_name_thai" name="drug_name_thai" placeholder="กรุณาป้อนชื่อยาไทย" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ชื่อยาภาษาอังกฤษ</label>
                    <input type="text-center" class="form-control" id="drug_name_eng" name="drug_name_eng" placeholder="กรุณาป้อนชื่อยาภาษาอังกฤษ" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">รหัสรูปแบบยา</label>
                    <input type="text-center" class="form-control" id="dt_id" name="dt_id" placeholder="กรุณาป้อนรหัสรูปแบบยา" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ตัวยาสำคัญ</label>
                    <input type="text-center" class="form-control" id="drug_key" name="drug_key" placeholder="กรุณาป้อนตัวยาสำคัญ" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ข้อบ่งใช้ยา</label>
                    <input type="text-center" class="form-control" id="drug_ind" name="drug_ind" placeholder="กรุณาป้อนข้อบ่งใช้ยา" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ขนาดและวิธีใช้</label>
                    <input type="text-center" class="form-control" id="drug_suse" name="drug_suse" placeholder="กรุณาป้อนขนาดและวิธีใช้" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ข้อควรระวัง</label>
                    <input type="text-center" class="form-control" id="drug_caution" name="drug_caution" placeholder="ข้อควรระวัง" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">รูปภาพยา</label>
                    <input class="form-control form-control-lg" id="drug_image" name="drug_image" type="file">
                </div>

                <div class="col-md-4">
                    <label for="form-laber">ราคา</label>
                    <input type="text-center" class="form-control" id="drug_price" name="drug_price" placeholder="กรุณาป้อนราคา" require>
                </div>

                <div class="col-md-4">
                    <label for="form-laber">จำนวนคงเหลือ</label>
                    <input type="text-center" class="form-control" id="drug_amount" name="drug_amount" placeholder="จำนวนคงเหลือ" require>
                </div>

                

                <div class="col-md-4">
                <span class="form-laber"> .</span>
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">
                </div>


            </div>

        </form>

    </div>







    <?php include("footboot.php"); ?>
</body>

</html>