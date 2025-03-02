<?php
if (isset($_SESSION)) {
    session_start();
}

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
    include("head_ad.php");
    include('../config/condb.php');
    if ($_GET["mdc_id"] == '') {
        echo "<script type='text/javascript'>";
        echo "alert('Error Contact Admin !!');";
        echo "window.location = 'medicallist.php'; ";
        echo "</script>";
    }
    $mdc_id = mysqli_real_escape_string($conn, $_GET['mdc_id']);


    $query = "SELECT * FROM tbl_medical WHERE mdc_id=$mdc_id" or die("Error:" . mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    extract($row);    ?>

</head>

<body>
    <h1> TEST EDIT

        <?php echo $mdc_id . " ชื่อคือ " . $mdc_name;  ?>
    </h1>
</body>

</html>