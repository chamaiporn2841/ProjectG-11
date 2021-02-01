<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบบริหารทรัพยากรบุคคล สำนักเทคโนโลยีดิจิทัล</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="news-slider.css">
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
                <img src="images/sut_logo_white.png" height="50px" />
                <img src="images/DigiTech_Logo-white.png" height="40px" />
            </div>

            <ul class="list-unstyled components">
                <li class="active"><a href="#"><i class="fa fa-home"></i>หน้าหลัก</a></li>

                <li><a href="#"><i class="fa fa-id-card"></i>ข้อมูลบุคลากร</a></li>

                <li>
                    <a href="#learningSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-book"></i>
                        การจัดการการเรียนรู้
                    </a>
                    <ul class="collapse list-unstyled" id="learningSubmenu">
                        <li><a href="#">บทเรียนทั้งหมด</a></li>
                        <li><a href="#">บทเรียนที่ลงทะเบียนแล้ว</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#WelSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-gift"></i>
                            สวัสดิการ
                    </a>
                    <ul class="collapse list-unstyled" id="WelSubmenu">
                        <!-- <li><a href="#">เกณฑ์การใช้วสวัสดิการ</a></li> -->
                        <li><a href="detailwel.php">รายละเอียดการใช้สวัสดิการ</a></li>
                        <li><a href="opresult.php">ผลการดำเนินการ</a></li>

                        <!-- <li><a href="#">พิจารณาการใช้สวัสดิการ</a></li>
                        <li><a href="#">อนุมัติการใช้สวัสดิการ</a></li>
                        <li><a href="#">รายงานสรุปการใช้สวัสดิการ</a></li> -->
                    </ul>
                </li>

                <li>
                    <a href="#formSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-pencil-square-o"></i>
                        คำร้องออนไลน์
                    </a>
                    <ul class="collapse list-unstyled" id="formSubmenu">
                        <li><a href="#">คำร้องขอแก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="#">คำร้องขอลา</a></li>
                        <li><a href="medexp.php">คำร้องสวัสดิการค่ารักษาพยาบาล</a></li>
                        <li><a href="comdevice.php">คำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a></li>
                        <li><a href="profund.php">คำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a></li>
                        <li><a href="uniform.php">คำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a></li>
                        <li><a href="tuitionfee.php">คำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a></li>
                        <li><a href="#">ติดตามผลคำร้อง</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-check-square-o"></i>การประเมิน</a></li>
                <li><a href="#"><i class="fa fa-handshake-o"></i>กิจกรรมสร้างความสัมพันธ์</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>ตารางกิจกรรม</a></li>
                
                <li>
                    <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-bar-chart"></i>
                        รายงาน
                    </a>
                    <ul class="collapse list-unstyled" id="reportSubmenu">
                        <li><a href="indexchart.php">Dashboard</a></li>
                        <li><a href="#">รายงานเวลาทำงาน</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#infocenterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-info-circle"></i>
                        สาระน่ารู้
                    </a>
                    <ul class="collapse list-unstyled" id="infocenterSubmenu">
                        <li><a href="#">คู่มือบุคลากร</a></li>
                        <li><a href="#">คู่มือการใช้งานระบบ</a></li>
                        <li><a href="#">เกร็ดความรู้</a></li>
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
                                        <button type="button" class="btn btn-secondary" style="padding: 16px;"
                                            id="user_name">ฐศุภรดา วิเชียรธปภา</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/user2.jpg" height="40px" style="border-radius: 50%;" />
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" sty href="#">เปลี่ยนรหัสผ่าน</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">ออกจากระบบ</a>
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

                            <form name="form3" action="insert3.php" method="post"  target="iframe_target">
                                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                <div class="media1">
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>สวัสดิการกองทุนสำรองเลี้ยงชีพ</b>
                                    </div>
                                </div>

                                <div class="media" style="padding-bottom: 20px;padding-left: 40px;padding-right: 40px;padding-top: 20px;">
                                        <div class="header">
                                            ข้อมูลส่วนตัว
                                        </div>  
  
                                    <table >
                                        <thead>
                                        <tr>
                                            <th>รหัสบุคลากร</th>
                                            <th>ชื่อบุคลากร</th>
                                            <th>ตำแหน่ง</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="pid" name="pid" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="namepn" name="namepn" required>
                                            </td>
                                            <td>
                                                <select class="form-control"  name="position" id="input" required>
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="วิชาการ">วิชาการ</option>
                                                    <option value="ปฏิบัติการวิชาชีพและบริหารทั่วไป">ปฏิบัติการวิชาชีพและบริหารทั่วไป</option>
                                                    <option value="บริหารวิชาการ">บริหารวิชาการ</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ประเภทบุคลากร</th>
                                            <th>วัน/เดือน/ปีเกิด</th>
                                            <th>อายุ</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control"  name="category" id="input" required>
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="หัวหน้าโครงการ">หัวหน้าโครงการ</option>
                                                    <option value="คณาจารย์">คณาจารย์</option>
                                                    <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                                                    <option value="ผู้ช่วยสอน">ผู้ช่วยสอน</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" id="born" name="born">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="Age" name="Age">
                                            </td>
                                        </tr>    
                                        <tr>
                                            <th>สัญชาติ</th>
                                            <th>สถานภาพสมรส</th>
                                            <th>ชื่อคู่สมรส</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="National"  name="National" >
                                            </td>
                                            <td>
                                                <select name="FStatus" id="FStatus">
                                                    <option value="โปรดระบุ">โปรดระบุ</option>
                                                    <option value="สมรส">สมรส</option>
                                                    <option value="โสด">โสด</option>
                                                    <option value="หย่าร้าง">หย่าร้าง</option>
                                                    <option value="แยกกันอยู่">แยกกันอยู่</option>
                                                    </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="spouse" name="spouse">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ประเภทสวัสดิการ</th>
                                        </tr>
                                        <td>
                                                <select class="form-control"  name="typebenefit" id="input" required>
                                                    <option value="สวัสดิการกองทุนสำรองเลี้ยงชีพ">สวัสดิการกองทุนสำรองเลี้ยงชีพ</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tbody>
                                    </table>                
                                </div>
                                
                                <div class="media" style="padding-bottom: 20px;padding-left: 40px;padding-right: 40px;padding-top: 20px;">
                                        <div class="header">
                                            ที่อยู่อาศัย
                                        </div>  
  
                                    <table >
                                        <thead>
                                        <tr>
                                            <th>บ้านเลขที่</th>
                                            <th>ถนน</th>
                                            <th>ตำบล/แขวง</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="NoH" name="NoH">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="road" name="road">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="LLocal" name="LLocal">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>อำเภอ/เขต</th>
                                            <th>จังหวัด</th>
                                            <th>รหัสไปรษณีย์</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="Amphoe" name="Amphoe">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="province" name="province">  
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="Pcode" name="Pcode">
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="media" style="padding-bottom: 20px;padding-left: 40px;padding-right: 40px;padding-top: 20px;">
                                        <div class="header">
                                            รายละเอียดการเข้าทำงาน
                                        </div>
                                
                                    <table >
                                        <thead>
                                            <tr>
                                                <th>วันที่เริ่มเข้าทำงาน</th>
                                                <th>สิทธิได้รับเงินสมทบ</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="date" class="form-control" id="Getw" name="Getw">
                                                </td>
                                                <td>
                                                    <select name="Contribution" id="Contribution">
                                                        <option value="โปรดเลือก">โปรดเลือก</option>
                                                        <option value="ระยะเวลาการปฏิบัติงาน ไม่ถึง 5 ปี">ระยะเวลาการปฏิบัติงาน ไม่ถึง 5 ปี</option>
                                                        <option value="ระยะเวลาการปฏิบัติงาน  5 ปี ไม่ถึง 10 ปี">ระยะเวลาการปฏิบัติงาน  5 ปี ไม่ถึง 10 ปี</option>
                                                        <option value="ระยะเวลาการปฏิบัติงาน  10 ปี ไม่ถึง 15 ปี">ระยะเวลาการปฏิบัติงาน  10 ปี ไม่ถึง 15 ปี</option>
                                                        <option value="ระยะเวลาการปฏิบัติงาน  15 ปี เป็นต้นไป">ระยะเวลาการปฏิบัติงาน  15 ปี เป็นต้นไป</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                                
                                <br/><br/>

                                    <div align="right"  class="container" style="margin-bottom: 20px;">
                                        <input type="submit" class="btn btn-success" value="บันทึก" data-toggle="modal" data-target="#myModal" style=" font-family: 'Mitr', sans-serif;">
                                        <input type="reset" class="btn" VALUE="ล้างข้อมูล" style=" font-family: 'Mitr', sans-serif;" >
                                    </div> 

                                </div> 
                                </form>  

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">แจ้งเตือนระบบ</h4>
                                        </div>
                                        <div class="modal-body">
                                        <p>บันทึกข้อมูลสำเร็จ</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </news>
            </main>

        </div>

    </div>


<footer class="bg-light text-center text-lg-start">
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
© 2020 Copyright:
<a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
</div>
<!-- Copyright -->
</footer>

<script type="text/javascript">
$(document).ready(function() {
$('#sidebarCollapse').on('click', function() {
$('#sidebar').toggleClass('active');
});
});
</script>

</body>

</html>

</body>

</html>