<?php

session_start();

/*echo $_SESSION["username"];*/

include("proj_connection.php");

$username = $_SESSION["username"];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบบริหารทรัพยากรบุคคล  - DigiTech</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font.css">
    <!-- Script -->
    <script src="assets/jquery.min.js"></script>
    <script src="assets/script.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/sut_logo_white.png" height="50px" />
                <img src="images/DigiTech_Logo-white.png" height="40px" />
            </div>

            <ul class="list-unstyled components">
                <li><a href="home.php"><i class="fa fa-home"></i>หน้าหลัก</a></li>

                <li class="active"><a href="admin.php"><i class="fa fa-id-card"></i>คำร้องขอรีเซ็ตรหัสผ่าน</a></li>

                <li><a href="manaapprove.php"><i class="fa fa-id-card"></i>คำร้องขอลา</a></li>

                <li><a href="showemp.php"><i class="fa fa-id-card"></i>ข้อมูลพนักงาน</a></li>

                <li><a href="#"><i class="fa fa-gift"></i>สวัสดิการ</a></li>
                <li>
                    <a href="#formSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-pencil-square-o"></i>
                        คำร้องออนไลน์
                    </a>
                    <ul class="collapse list-unstyled" id="formSubmenu">
                        <li><a href="form_editpersonalinfo.php">คำร้องขอแก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="form_leave.php">คำร้องขอลา</a></li>
                        <li><a href="#">คำร้องสวัสดิการค่ารักษาพยาบาล</a></li>
                        <li><a href="#">คำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a></li>
                        <li><a href="#">คำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a></li>
                        <li><a href="#">คำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a></li>
                        <li><a href="#">คำร้องสวัสดิการฌาปนกิจสงเคราะห์</a></li>
                        <li><a href="#">คำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a></li>
                        <li><a href="#">ติดตามผลคำร้อง</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#evaluateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-check-square-o"></i>
                        การประเมิน
                    </a>
                    <ul class="collapse list-unstyled" id="evaluateSubmenu">
                        <li><a href="#">สายวิชาการ</a></li>
                        <li><a href="#">สายบริหารวิชาการ</a></li>
                        <li><a href="#">สายปฏิบัติการ</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fa fa-handshake-o"></i>กิจกรรมสร้างความสัมพันธ์</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>ตารางกิจกรรม</a></li>

                <li>
                    <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-bar-chart"></i>
                        รายงาน
                    </a>
                    <ul class="collapse list-unstyled" id="reportSubmenu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">รายงานเวลาทำงาน</a></li>
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

                <li><a href="#"><i class="fa fa-question-circle"></i>FA&Q ถาม-ตอบ บ่อย</a></li>
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

                                    function thai_date($time)
                                    {
                                        global $thai_day_arr, $thai_month_arr;
                                        $thai_date_return = "วัน " . $thai_day_arr[date("w", $time)];
                                        $thai_date_return .= " ที่ " . date("j", $time);
                                        $thai_date_return .= " " . $thai_month_arr[date("n", $time)];
                                        $thai_date_return .= "  " . (date("Y", $time) + 543);
                                        $thai_date_return .= "  เวลา" . date(" H:i", $time) . " น.";
                                        return $thai_date_return;
                                    }

                                    $eng_date = time(); // แสดงวันที่ปัจจุบัน
                                    echo thai_date($eng_date);
                                    ?>
                                </div>

                                <div class="col-12 col-md-4" id="usermenu">
                                    <div class="btn-group" style="float: right;">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="user_name">
                                            <?php
                                            /*Personal Data*/
                                            $sql = " SELECT personal.IDpsnl, personal.Edurank,personal.NThai, personal.NEng, personal.ID_position, 
                                                        personal.Position, position.Type_position,personal.section,personal.subsection,personal.Email,personal.Tel,
                                                        personal.StartDate,personal.imgPath
                                                        FROM personal
                                                        INNER JOIN position ON personal.ID_position = position.ID_position
                                                        INNER JOIN general ON personal.IDpsnl = general.IDpsnl
                                                        Where personal.IDpsnl='" . $username . "' ";

                                            $result = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_array($result)) {
                                                $empID = $row["IDpsnl"];
                                                $ThaiName = $row["NThai"];
                                                $EngName = $row["NEng"];
                                                $positionID = $row["ID_position"];
                                                $positionName = $row["Position"];
                                                $positionType = $row["Type_position"];
                                                $section = $row["section"];
                                                $subsection = $row["subsection"];
                                                $email = $row["Email"];
                                                $tel = $row["Tel"];
                                                $startDate = $row["StartDate"];
                                                $imgPath = $row["imgPath"];
                                                $Edurank = $row["Edurank"];

                                                /* echo $empID;
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

                                                <img src="<?php echo $imgPath; ?>" height="40px" style="border-radius: 50%;" />
                                                <span style="padding-left:20px;text-decoration:none;"><?php echo $Edurank . ' ' . $ThaiName; ?></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" sty href="repassword.php">เปลี่ยนรหัสผ่าน</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="index.html">ออกจากระบบ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </nav>

            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 headerpage">
                            <h4><i class="fa fa-id-card"></i>รายงานเวลาเข้าออกงาน</h4>
                        </div>
                    </div>
                    <div class="row mycontent">
                        <!-- Button trigger modal -->
                        <br />
                        <div style="margin-right:20px;width:300px;float: right;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalend" style="float: right;">
                                บันทึกเวลาออกจากงาน
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalstart" style="float: left;">
                                บันทึกเวลาเริ่มงาน
                            </button>

                        </div>

                        <br />
                        <!-- Modal -->
                        <div class="modal fade" id="modalstart" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <b class="modal-title" id="EditEdu" style="font-size: 1.2em;">บันทึกเวลาเริ่มงาน</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: inline;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <form method="POST" action="add_starttime.php">
                                                <?php
                                                date_default_timezone_set('Asia/Bangkok');

                                                $date = date("Y/m/d");

                                                // echo $date."<br>";

                                                $time = date("h:i:sa");

                                                function DateThai($strDate)
                                                {
                                                    $strYear = date("Y", strtotime($strDate)) + 543;
                                                    $strMonth = date("n", strtotime($strDate));
                                                    $strDay = date("j", strtotime($strDate));
                                                    $strMonthCut =
                                                        array("", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
                                                    $strMonthThai = $strMonthCut[$strMonth];
                                                    return "$strDay/$strMonthThai/$strYear";
                                                }
                                                $strDate = $date;

                                                function TimeThai($strTime)
                                                {
                                                    $strHour = date("H", strtotime($strTime));
                                                    $strMinute = date("i", strtotime($strTime));
                                                    $strSeconds = date("s", strtotime($strTime));
                                                    return "$strHour:$strMinute:$strSeconds";
                                                }
                                                $strTime = $time;

                                                $mydate = DateThai($strDate);
                                                $mytime = TimeThai($strTime);

                                                // echo "วันที่ ".$mydate."<br>";
                                                // echo "เวลา ".$mytime ;
                                                echo '  <div class="form-group">
                                                            <label>วันที่</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                            value="' . $mydate . '" name="sDate" readonly style="background-color:#fff;">
                                                        </div>';

                                                echo '  <div class="form-group">
                                                            <label>เวลา</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                            value="' . $mytime . '" name="sTime" readonly style="background-color:#fff;">
                                                        </div>';
                                                ?>
                                        </div>
                                        <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="modalend" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <b class="modal-title" id="EditEdu" style="font-size: 1.2em;">บันทึกเวลาออกจากงาน</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: inline;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <form method="POST" action="add_endtime.php">
                                                <?php
                                                date_default_timezone_set('Asia/Bangkok');

                                                $date2 = date("Y/m/d");

                                                // echo $date."<br>";

                                                $time2 = date("h:i:sa");

                                                function DateThai2($strDate)
                                                {
                                                    $strYear = date("Y", strtotime($strDate)) + 543;
                                                    $strMonth = date("n", strtotime($strDate));
                                                    $strDay = date("j", strtotime($strDate));
                                                    $strMonthCut =
                                                        array("", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
                                                    $strMonthThai = $strMonthCut[$strMonth];
                                                    return "$strDay/$strMonthThai/$strYear";
                                                }
                                                $strDate = $date2;

                                                function TimeThai2($strTime)
                                                {
                                                    $strHour = date("H", strtotime($strTime));
                                                    $strMinute = date("i", strtotime($strTime));
                                                    $strSeconds = date("s", strtotime($strTime));
                                                    return "$strHour:$strMinute:$strSeconds";
                                                }
                                                $strTime = $time2;

                                                $mydate2 = DateThai($strDate);
                                                $mytime2 = TimeThai($strTime);

                                                // echo "วันที่ ".$mydate."<br>";
                                                // echo "เวลา ".$mytime ;
                                                echo '  <div class="form-group">
                                                            <label>วันที่</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                            value="' . $mydate2 . '" name="eDate" readonly style="background-color:#fff;">
                                                        </div>';

                                                echo '  <div class="form-group">
                                                            <label>เวลา</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                            value="' . $mytime2 . '" name="eTime" readonly style="background-color:#fff;">
                                                        </div>';
                                                ?>
                                        </div>
                                        <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="height: 40px;"></div>

                    </div>

                    <div class="row mycontent">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <table id="time_trans" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr class="payroll">
                                        <th colspan="3">การเข้างาน</th>
                                        <th colspan="3">การออกงาน</th>
                                    </tr>
                                    <tr class="payroll" style="background-color:#ACD1E7;color:#000;">
                                        <th>วันที่</th>
                                        <th>เวลา</th>
                                        <th>สถานะ</th>
                                        <th>วันที่</th>
                                        <th>เวลา</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql2 = "SELECT time_start.t_ID, time_start.IDpsnl, 
                                        time_start.Stime, time_start.SDate, time_start.sStatus, 
                                        time_end.eTime, time_end.eDate,time_end.eStatus
                                        FROM  time_start
                                        INNER JOIN time_end ON time_start.IDpsnl = time_end.IDpsnl
                                        Where time_start.IDpsnl='" . $username . "'";

                                        $result2 = mysqli_query($con, $sql2);

                                         while ($row2 = mysqli_fetch_array($result2)) {
                                             $sDate = $row2["SDate"];
                                             $sTime = $row2["Stime"];
                                             $eTime = $row2["eTime"];
                                             $eDate = $row2["eDate"];
                                             $eStatus = $row2["eStatus"];
                                             $sStatus = $row2["sStatus"];
                                            
                                             echo '<tr>';
                                             echo '<td>'.$sDate.'</td>';
                                             echo '<td>'.$sTime.'</td>';
                                             echo '<td>'.$sStatus.'</td>';
                                             echo '<td>'.$eDate.'</td>';
                                             echo '<td>'.$eTime.'</td>';
                                             echo '<td>'.$eStatus.'</td>';
                                             echo '</tr>';
                                         }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

            </main>

            <div style="height: 40px;"></div>

        </div>

    </div>

    </div>
    <!-- Start footer -->
    <footer id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">ระบบบริหารทรัพยากรบุคคล สำนักวิชาเทคโนโลยีดิจิทัล มหาวิทยาลัยเทคโนโลยีสุรนารี
                        ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000</p>
                    <p class="text-center">
                        แจ้งปัญหาการใช้งาน&ensp;:&ensp;&ensp;
                        <span class="fa fa-phone fa-lg"></span>&ensp;044-223789&ensp;|&ensp;
                        <span class="fa fa-envelope fa-lg"></span>&ensp;digitech@sut.ac.th
                    </p>
                </div>
            </div>
        </div>
        <p class="text-center">&copy; Copyright 2020 - ระบบบริหารทรัพยากรบุคคล
            สำนักวิชาเทคโนโลยีดิจิทัล</p>
    </footer>
    <!-- End footer -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#time_trans').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                responsive: true,
                "language": {
                    "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดง หน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "ค้นหา",
                    "oPaginate": {
                        "sNext": "<i class='fa fa-chevron-right'></i>",
                        "sPrevious": "<i class='fa fa-chevron-left'></i>"
                    }
                }
            });
        });
    </script>

</body>
<?php } ?>

</html>
<?php
mysqli_close($con);
?>