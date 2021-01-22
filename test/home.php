<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
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

                <li><a href="#"><i class="fa fa-gift"></i>สวัสดิการ</a></li>

                <li>
                    <a href="#formSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-pencil-square-o"></i>
                        คำร้องออนไลน์
                    </a>
                    <ul class="collapse list-unstyled" id="formSubmenu">
                        <li><a href="#">คำร้องขอแก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="#">คำร้องขอลา</a></li>
                        <li><a href="#">คำร้องสวัสดิการค่ารักษาพยาบาล</a></li>
                        <li><a href="#">คำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a></li>
                        <li><a href="#">คำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a></li>
                        <li><a href="#">คำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a></li>
                        <li><a href="#">คำร้องสวัสดิการฌาปนกิจสงเคราะห์</a></li>
                        <li><a href="#">คำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a></li>
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
                                            id="user_name">ฉัตรภัสร์ ฐิติอัคราวงศ์</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/user1.jpg" height="40px" style="border-radius: 50%;" />
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
                                <div class="media">
                               
                                <form name="form1" action="insert1.php" method="post"  target="iframe_target">
                                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                    <div class="media-body">
                                        <table border="0" Height="30%" align="center">
                                    <H2> ข้อมูลทั่วไป </H2><br/>
                                    <tr>
                                        <td width="170" style="color:#005b91" >
                                            รหัสบุคลากร
                                        </td>
                                        <td width="200">
                                            <input type="text" class="form-control" id="pid" name="pid">
                                        </td>
                                        
                                        <td width="200" style="color:#005b91">
                                            ชื่อบุคลากร
                                        </td>
                                        <td width="200">
                                        <input type="text" class="form-control" id="namepn" name="namepn">
                                        </td>
                                        <td width="200" style="color:#005b91">
                                            ตำแหน่งทางวิชาการ
                                        </td>
                                        <td width="200">
                                            <select name="position" id="position">
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="วิชาการ">วิชาการ</option>
                                                    <option value="ปฏิบัติการวิชาชีพและบริหารทั่วไป">ปฏิบัติการวิชาชีพและบริหารทั่วไป</option>
                                                    <option value="บริหารวิชาการ">บริหารวิชาการ</option>
                                                </select>
                                        </td>
                                        <tr><td></td></tr>
                                    </tr>
                                    <tr>
                                        <td  style="color:#005b91" >
                                            ประเภทบุคลากร
                                        </td>
                                        <td width="200">
                                            <select name="category" id="category">
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="หัวหน้าโครงการ">หัวหน้าโครงการ</option>
                                                    <option value="คณาจารย์">คณาจารย์</option>
                                                    <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                                                    <option value="ผู้ช่วยสอน">ผู้ช่วยสอน</option>
                                                </select>
                                        </td>
                                        
                                    </tr>
                                    </table><br/><br/>

                                    <table border="0" Height="25%" align="center">
                                    <H2> เบิกค่ารักษาพยาบาล </H2><br/>
                                    <tr>
                                        <td width="200" style="color:#005b91" >
                                            เบิกค่ารักษาพยาบาลให้
                                        </td>
                                        <td width="230">
                                            <select name="Reveal" id="Reveal">
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="ตนเอง">ตนเอง</option>
                                                    <option value="คู่สมรส">คู่สมรส</option>
                                                    <option value="บิดา">บิดา</option>
                                                    <option value="มารดา">มารดา</option>
                                                    <option value="บุตร">บุตร</option>
                                                </select>
                                        </td>
                                        <td width="200" style="color:#005b91" >
                                            ชื่อ-นามสกุล
                                        </td>
                                        <td width="200">
                                            <input type="text" class="form-control" id="namerl" name="namerl">
                                        </td>
                                        <td width="200" style="color:#005b91">
                                            วัน/เดือน/ปีเกิด
                                        </td>
                                        <td width="200">
                                            <input type="date" class="form-control" id="born" name="born">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  style="color:#005b91" >
                                            <label>ประเภทสถานพยาบาล</label>  
                                        </td>
                                        <td  style="color:#005b91">
                                        <select name="cinf" id="cinf">
                                                <option value="โปรดเลือก">โปรดเลือก</option>
                                                <option value="เอกชน">เอกชน</option>
                                                <option value="รัฐบาล">รัฐบาล</option>
                                            </select>
                                        </td>
                                        <td  style="color:#005b91" >
                                            <label>ชื่อสถานพยาบาล</label>  
                                        </td>
                                        <td  style="color:#005b91">
                                            <input type="text" class="form-control" id="nameinf" name="nameinf">
                                        </td>
                                        <td  style="color:#005b91" >
                                            <label>วันที่ทำการรักษาพยาบาล</label>  
                                        </td>
                                        <td  style="color:#005b91">
                                            <input type="date" class="form-control" id="operate" name="operate">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  style="color:#005b91" >
                                            <label>อาการป่วย</label>  
                                        </td>
                                        <td  style="color:#005b91">
                                            <input type="text" class="form-control" id="symptom" name="symptom">
                                        </td>
                                        <td  style="color:#005b91" >
                                            <label>จำนวนเงิน</label>  
                                        </td>
                                        <td  style="color:#005b91">
                                            <input type="number" class="form-control" id="cmoney" name="cmoney">
                                        </td>
                                        
                                    </tr>
                                    </table>
                                    <br/><br/>
                                    <table border="0" Height="20%" align="center">
                                    <H2> รายละเอียดการรับเงิน </H2><br/>
                                    <tr>
                                        <td width="150" style="color:#005b91" >
                                            ช่องทางรับเงิน
                                        </td>
                                        <td width="230">
                                            <select name="channel" id="channel">
                                                    <option value="โปรดเลือก">โปรดเลือก</option>
                                                    <option value="เงินสด">เงินสด</option>
                                                    <option value="โอนเงินเข้าบัญชีเงินฝาก">โอนเงินเข้าบัญชีเงินฝาก</option>
                                                </select>
                                        </td>
                                        <td width="150" style="color:#005b91" >
                                            บัญชีธนาคาร
                                        </td>
                                        <td width="230">
                                            <select name="bank" id="bank">
                                                        <option value="โปรดเลือก">โปรดเลือก</option>
                                                        <option value="กรุงไทย">กรุงไทย</option>
                                                        <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                                                    </select>
                                        </td>
                                        <td width="150" style="color:#005b91" >
                                            เลขที่บัญชี
                                        </td>
                                        <td width="230">
                                            <input type="text" class="form-control" id="account" name="account">
                                        </td>
                                        <tr>
                                            <td width="150" style="color:#005b91" >
                                            
                                            </td>
                                            <td width="230">
                                            
                                            </td>
                                            <td width="150" style="color:#005b91" >
                                            
                                            </td>
                                            <td width="230">
                                            
                                            </td><br/><br/>
                                            <td width="150" style="color:#005b91" >
                                        <!-- submit  -->    
                                            </td>
                                            <td width="230">
                                            <input type="submit" class="btn btn-success" value="บันทึก" style=" font-family: 'Mitr', sans-serif;">
                                            <input type="reset" class="btn" VALUE="ล้างข้อมูล" style=" font-family: 'Mitr', sans-serif;" >
                                            </td>
                                            
                                        </tr>
                                        </table>
                                                </div>
                                            </div>
                                </form>            
                                <!--news1-->

                                <div class="media">
                                    
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                elit. Nam, tenetur aliquid officiis, minus accusamus in eos harum
                                                incidunt
                                                est maxime expedita ipsum ipsam molestias illum cupiditate velit, rem
                                                quam
                                                ea.</b> <small><i>Posted on February 19, 2016</i></small></h4>
                                    </div>
                                </div>
                                <!--news2-->

                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/news.jpg" class="media-object" alt="Responsive image" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                elit. Nam, tenetur aliquid officiis, minus accusamus in eos harum
                                                incidunt
                                                est maxime expedita ipsum ipsam molestias illum cupiditate velit, rem
                                                quam
                                                ea.</b> <small><i>Posted on February 19, 2016</i></small></h4>
                                    </div>
                                </div>
                                <!--news3-->
                            </div>
                        </div>
                    </div>
                </news>
            </main>

            <div style="height: 40px;"></div>
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