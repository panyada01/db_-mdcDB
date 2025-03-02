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
    include("../config/condb.php");
    ?>
</head>

<body>
    <!-- Navbar -->
    <?php include("navbar_ad.php"); ?>
    <!-- /.navbar -->
    <?php include("menu_ad.php"); ?>
    <table id="example3" class="table table-bordered table-striped dataTable">
        <thead>
            <tr role="row" class="info">
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสบุคลากร</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ตำแหน่ง</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ-สกุล</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เบอร์โทร-Email</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ที่อยู่</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ระดับ</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_medical order by mdc_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {

            ?>

        <tbody>
            <tr>
            <td>
                    <?php echo ++$i; ?>
                </td>
                <td>
                    <?php echo $row['mdc_id']; ?>
                </td>
                <td>
                    <?php echo $row['pst_name']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_name'] . " " . $row['mdc_surname']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_phone'] . " " . $row['mdc_email']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_add']; ?>
                </td>
                <td>
                    <?php echo $row['level']; ?>
                </td>



                <td><img class="img-rounded" src="images_ps/<?= $row['ps_image']; ?>" width="100" height="100"> </td>

                <td><a class="btn btn-warning btn-flat btn-sm" href="midecal_frm_edit.php?act=edit&mdc_id=<?php echo $row['mdc_id']; ?>">
                        แก้ไข
                    </a> </td>

                <td> <a class="btn btn-success" href="midecal_del.php?mdc_id=<?= $row['mdc_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                        ลบ
                    </a></td>
            <?php } ?>
            </tr>
        </tbody>
        </thead>
    </table>




    <?php include("head_ad.php"); ?>
</body>

</html>