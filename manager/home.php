<?php 

session_start(); 

/*echo $_SESSION["username"]; */

include("config.php");

$username = $_SESSION["username"];

$sql= " SELECT * FROM personal Where personal.IDpsnl='".$username."' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
    $empID = $row["IDpsnl"];
    $ThaiName = $row["NThai"];
    $imgPath = $row["imgPath"];
    $Edurank = $row["Edurank"];

    /*echo $empID;
    echo $ThaiName;
    echo $EngName;
    echo $positionID;
    echo $positionName;
    echo $positionType;
    echo $program;
    echo $facalty;
    echo $email;
    echo $tel;
    echo $startDate;
    echo $imgPath;*/

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบบริหารทรัพยากรบุคคล - DigiTech</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../images/favicon.ico" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../font.css">
    <!-- <link rel="stylesheet" href="news-slider.css"> -->
    <!-- Script -->
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../images/sut_logo_white.png" height="50px" />
                <img src="../images/DigiTech_Logo-white.png" height="40px" />
            </div>

            <ul class="list-unstyled components">
                <li class="active"><a href="home.php"><i class="fa fa-home"></i>หน้าหลัก</a></li>

                <li><a href="personalinfo.php"><i class="fa fa-id-card"></i>ข้อมูลบุคลากร</a></li>

                <li>
                    <a href="#learningSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-book"></i>
                        การจัดการการเรียนรู้
                    </a>
                    <ul class="collapse list-unstyled" id="learningSubmenu">
                        <li><a href="homelearning.php">บทเรียนทั้งหมด</a></li>
                        <li><a href="courseregis.php">บทเรียนที่ลงทะเบียนแล้ว</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#BenefitSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-gift"></i>
                        สวัสดิการ
                    </a>
                    <ul class="collapse list-unstyled" id="BenefitSubmenu">
                        <li><a href="detailwel.php">รายละเอียดการใช้สวัสดิการ</a></li>
                        <li><a href="consider.php">พิจารณาการใช้สวัสดิการ</a></li>
                    </ul>
                </li>

                <li><a href="payroll.php"><i class="fa fa-credit-card"></i>บัญชีเงินเดือน</a></li>

                <li>
                    <a href="#formSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-pencil-square-o"></i>
                        คำร้องออนไลน์
                    </a>
                    <ul class="collapse list-unstyled" id="formSubmenu">
                        <li><a href="form_editpersonalinfo.php">คำร้องขอแก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="form_leave.php">คำร้องขอลา</a></li>
                  
                    </ul>
                </li>

               

                <li><a href="evaluate_home.php"><i class="fa fa-check-square-o"></i>การประเมิน</a></li>

                <li><a href="event_home.php"><i class="fa fa-handshake-o"></i>กิจกรรมสร้างความสัมพันธ์</a></li>
                <li><a href="calendar.php"><i class="fa fa-calendar"></i>ตารางกิจกรรม</a></li>

                <li>
                    <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-bar-chart"></i>
                        รายงาน
                    </a>
                    <ul class="collapse list-unstyled" id="reportSubmenu">
                        <li><a href="time_report.php">รายงานเวลาทำงาน</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#infocenterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-info-circle"></i>
                        สาระน่ารู้
                    </a>
                    <ul class="collapse list-unstyled" id="infocenterSubmenu">
                        <li><a href="#">เกร็ดความรู้</a></li>
                        <li><a href="#">คู่มือบุคลากร</a></li>
                        <li><a href="#">คู่มือการใช้งานระบบ</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fa fa-question-circle"></i>FAQ ถาม-ตอบ บ่อย</a></li>
            </ul>

        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-4" id="togglenav">
                                    <button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>

                                <div class="col-12 col-md-4" id="datetime">
                                    <?php
                                        include("dateandtime.php");
                                        
                                        function thai_date($time){
                                            global $thai_day_arr,$thai_month_arr;
                                            $thai_date_return="วัน ".$thai_day_arr[date("w",$time)];
                                            $thai_date_return.= " ที่ ".date("j",$time);
                                            $thai_date_return.=" ".$thai_month_arr[date("n",$time)];
                                            $thai_date_return.= "  ".(date("Y",$time)+543);
                                            $thai_date_return.= "  เวลา".date(" H:i",$time)." น.";
                                            return $thai_date_return;
                                        }

                                        $eng_date=time(); // แสดงวันที่ปัจจุบัน
                                        echo thai_date($eng_date);
                                    ?>
                                </div>

                                <div class="col-12 col-md-4" id="usermenu">
                                    <div class="btn-group" style="float: right;">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            id="user_name">
                                            <img src="../<?php echo $imgPath; ?>" height="40px"
                                                style="border-radius: 50%;" />
                                            <span
                                                style="padding-left:20px;text-decoration:none;"><?php echo $Edurank.' '.$ThaiName; }?></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" sty href="../repassword.php">เปลี่ยนรหัสผ่าน</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../logout.php">ออกจากระบบ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </nav>

            <main>
                <news>
                    <div class="container-fluid" id="news">
                        <div class="row">
                            <div class="col-md-12">
                                <!--news1-->
                                <?php 
                            $sql2= " SELECT * FROM news";
                            $result2 = mysqli_query($con,$sql2);

                            while($row2 = mysqli_fetch_array($result2)){

                                    $id = $row2["n_ID"];
                                    $title = $row2["N_title"];
                                    $des = $row2["N_Des"];
                                    $time = $row2["N_date"];
                                    $img = $row2["N_img"];
                            
                                echo '<div class="media">';
                                echo '<div class="media-left">';
                                echo '<img src="../'.$img.'" class="media-object" alt="Responsive image" />';
                                echo '  </div>';
                                echo '<div class="media-body">';
                                echo ' <a href="../news_detail.php?n_ID='.$id.'"><h4 class="media-heading"><b>'.$title.'</b><br/><small><i>ประกาศเมื่อ '.$time.'</i></small></h4></a>';
                                echo '  </div>';
                                echo '</div>';
                            }?>

                                <!--news3-->
                            </div>
                        </div>
                    </div>
                </news>
            </main>

            <div style="height: 40px;"></div>
        </div>

    </div>

    <!-- Start footer -->
    <footer id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <p class="text-center">ระบบบริหารทรัพยากรบุคคล
                        โครงการจัดรูปแบบการบริหารวิชาการด้านเทคโนโลยีดิจิทัลรูปใหม่ (DigiTech)</p>
                    <p class="text-center">111 มหาวิทยาลัยเทคโนโลยีสุรนารี ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000</p>
                    <p class="text-center">
                        แจ้งปัญหาการใช้งาน&ensp;:&ensp;&ensp;
                        <span class="fa fa-phone fa-lg"></span>&ensp;044-223789&ensp;|&ensp;
                        <span class="fa fa-envelope fa-lg"></span>&ensp;digitech@sut.ac.th
                    </p>
                </div>
            </div>
        </div>
        <br>
        <p class="text-center">&copy; Copyright 2021 - ระบบบริหารทรัพยากรบุคคล
            โครงการจัดรูปแบบการบริหารวิชาการด้านเทคโนโลยีดิจิทัลรูปใหม่</p>
    </footer>
    <!-- End footer -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>

</html>