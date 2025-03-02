<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลบัญชียา</title>
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
    <?php
    include("config/condb.php");
    $drug_id=$_POST["drug_id"];
    $drug_name_thai=$_POST["drug_name_thai"];
    $drug_name_eng=$_POST["drug_name_eng"];
    $dt_id=$_POST["dt_id"];
    $drug_key=$_POST["drug_key"];
    $drug_ind=$_POST["drug_ind"];
    $drug_suse=$_POST["drug_suse"];
    $drug_caution=$_POST["drug_caution"];
    $drug_price=$_POST["drug_price"];
    $drug_amount=$_POST["drug_amount"];
    // $ps_other_detail = $_POST["ps_other_detail"];

    print "รหัสบุคลากร คือ : ". $drug_id . "<br>";

    
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//ตัวแปรสุ่มตัวเลขเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
$upload = $_FILES["drug_image"]; //ตัวแปรที่รับมาจากฟอร์ม


if ($upload <> '') {
    //โฟลเดอร์ที่เก็บไฟล์
    $path = "images_dr/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES["drug_image"]["name"], ".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand . $date1 . $type;
    $path_copy = $path . $newname;
    $path_link = "images_dr/" . $newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES["drug_image"]["tmp_name"], $path_copy);
}


    $sql = "INSERT INTO tbl_Drug (drug_id,drug_name_thai,drug_name_eng,dt_id,drug_key,drug_ind,drug_suse,drug_caution,drug_price,drug_amount,drug_image)VALUES ('$drug_id','$drug_name_thai','$drug_name_eng','$dt_id','$drug_key','$drug_ind','$drug_suse','$drug_caution','$drug_price','$drug_amount','$newname')";
    $result = mysqli_query($conn, $sql) or die("Error in query หรือจัดการข้อมูลไม่ได้ : $sql ");
    mysqli_close($conn);
    

    //ถ้าสำเร็จให้ขึ้นอะไร
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('ทำการบันทึกข้อมูลสำเร็จเรียบร้อยแล้ว');";
        echo "window.location = 'Drug_frm.php';";
        echo "</script>";
    } else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
        echo "<script type='text/javascript'>";
        echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
        echo "window.location = 'index2.php'; ";
        echo "</script>";
    }
    ?>


    <?php include("footboot.php"); ?>
</body>

</html>