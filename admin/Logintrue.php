<meta charset="utf-8">
<?php
if(isset($_SESSION['mdc_id'])) {} else{
    echo"<script>";
    echo"window.location='midecal_show.php'";
    echo"</script>";
    exit();
}
?>