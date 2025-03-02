<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลบุคคล</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    include("config/condb.php");
    ?>
</head>

<body>
    <?php include("navbar.php"); ?>
    <table id="example3" class="table table-bordered table-striped dataTable">
        <thead>
            <tr role="row" class="info">
                <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th> -->
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสอ้างอิงบุคคล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สกุล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 4%;">รูปภาพ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_medical order by mdc_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {

            ?>

        <tbody>
            <tr>
                <td><?php print $row['mdc_id']; ?> </td>
                <td> <?php echo $row['mdc_name']; ?></td>
                <td> <?php echo $row['mdc_surname']; ?></td>

                <td><img class="img-rounded" src="images_ps/<?= $row['mdc_image']; ?>" width="100" height="100"> </td>

            <?php } ?>
            </tr>
        </tbody>
        </thead>
    </table>


    <?php include("footboot.php"); ?>
</body>

</html>