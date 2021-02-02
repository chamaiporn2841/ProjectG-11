<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '12345', 'benefit');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM hr";
    $result = $connect->query($sql);
      
?>
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
          <li><a href="#"><i class="fa fa-home"></i>หน้าหลัก</a></li>

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
                        <!-- <li><a href="definewel.php">เกณฑ์การใช้วสวัสดิการ</a></li> -->
                        <li class="active"><a href="detailwel.php">รายละเอียดการใช้สวัสดิการ</a></li>
                        <li><a href="consider.php">พิจารณาการใช้สวัสดิการ</a></li>
                        <!-- <li><a href="opresult.php">ผลการดำเนินการ</a></li> -->
                        <!-- <li><a href="approve.php">อนุมัติการใช้สวัสดิการ</a></li> -->
                        <!-- <li><a href="report.php">รายงานสรุปการใช้สวัสดิการ</a></li> -->
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
                       <!--  <li><a href="medexp.php">คำร้องสวัสดิการค่ารักษาพยาบาล</a></li>
                        <li><a href="comdevice.php">คำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a></li>
                        <li><a href="profund.php">คำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a></li>
                        <li><a href="uniform.php">คำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a></li>
                        <li><a href="tuitionfee.php">คำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a></li> -->
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
                                        <button type="button" class="btn btn-secondary" style="padding: 16px;"
                                            id="user_name">รัชนีกร ทองมา</button>
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
                  <div class="media1">
                   <!--  target="iframe_target" -->

                    <!-- <form name="form11" action="inserthr.php" method="post">
                      <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> -->
                      <div class="media-body">
                        <h4 class="media-heading"><b>รายละเอียดสวัสดิการ</b>
                          <!-- </div><hr> -->
                      </div>
                      </div>

                      <div class="media" style="padding: 50px;">
                            
                            <?php while($row = $result->fetch_assoc()): 
                              $TEXT= str_replace("\n", "<br>\n", $row['requirement_text']);?>
                                <div class="text_1"><?php echo $row['requirement_type']; ?></div>
                                <div class="text_2" ><?php echo $TEXT; ?></div>
                                </br></br>

                                <?php endwhile ?>
                            <br>
                          </div>
                            
                            
                    </div>
                  </div>
                </div>
              </div>










          
    </div>
</body>
</html> 