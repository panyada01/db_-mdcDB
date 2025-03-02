<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn Bootstrap </title>

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
    <!-- Navbar -->

    <?php include("navbar.php");   ?>

    <!-- End Navbar -->

    <!-- Hero -->
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/pic3.jpg" width="900" height="500" alt="">
        <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Feature -->
    
    <!-- End Feature -->

    <!-- End Product -->

    <!-- Card-Album -->
    <div class="container">
                        <div class="row">
                            <div class="col-sm-1 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="https://i.pinimg.com/736x/4f/c8/37/4fc83738f5c2727321bab3771d8b115a.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">- จิตแพทย์เด็กและวัยรุ่น -</h5>
                                        <p class="card-text">จิตแพทย์เด็กและวัยรุ่น 1 ตำแหน่ง มีเงินประกันรายได้ สอบถามข้อมูลเพิ่มเติมได้ที่ หน่วยธุรการองค์กรแพทย์ ชั้น 18 อาคารวิชัยยุทธเหนือ E-mail: office@vichaiyut.com โทร.02-265-7777 ต่อ 31986 - 7 ...</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-1 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="https://png.pngtree.com/png-clipart/20220106/ourlarge/pngtree-doctors-png-image_4207155.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">- ผู้ช่วยนักกายภาพบำบัด -</h5>
                                        <p class="card-text">ตำแหน่งงาน ผู้ช่วยนักกายภาพบำบัด 2 อัตรา รายละเอียดของงาน - รับผิดชอบหน้าที่ในการเตรียมเครื่องมือ อุปกรณ์ สถานที่ - ช่วยเหลือนักกายภาพบำบัดในการฟื้นฟูผู้ป่วย...</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-1 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="https://png.pngtree.com/element_our/png_detail/20181109/male-doctor-holding-a-stethoscope-in-medical-office-png_234074.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">- พยาบาล (ห้องคลอด) -</h5>
                                        <p class="card-text">ตำแหน่งงาน พยาบาล (ห้องคลอด) 1 อัตรา คุณสมบัติผู้สมัคร - เพศชาย / หญิง อายุ 22-30 ปี - วุฒิการศึกษาปริญญาตรี สาขาพยาบาลศาสตร์ - ได้รับใบอนุญาตประกอบวิชาชีพ - มีประสบการณ์ทำงานห้องคลอ...</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-1 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="https://png.pngtree.com/png-vector/20200408/ourlarge/pngtree-cartoon-design-of-doctor-with-stethoscope-png-image_2178298.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">- พยาบาล (OPD) -</h5>
                                        <p class="card-text">ตำแหน่งงาน พยาบาล (OPD) 3 อัตรา คุณสมบัติผู้สมัคร - เพศชาย / หญิง อายุ 22-30 ปี - วุฒิการศึกษาปริญญาตรี สาขาพยาบาลศาสตร์ - ได้รับใบอนุญาตประกอบวิชาชีพ - มีประสบการณ์ทำงาน OPD...</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
    <!-- End Album -->

    <!-- Card Album2 -->
    
    <!-- End Card Album2 -->

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Desing By Panyada.ph</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                    </svg></a></li>
        </ul>
    </footer>
    <!-- End Footer -->


    <?php include("footboot.php") ?>




</body>

</html>