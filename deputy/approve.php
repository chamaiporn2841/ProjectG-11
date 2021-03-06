<?php 
session_start(); 
    include('config.php');  
    $sql = "SELECT * FROM benefittotal";
    $result = $con->query($sql);
    $username = $_SESSION["username"];

    /*Personal Data*/
    $sql1= " SELECT * FROM personal Where personal.IDpsnl='".$username."' ";
    $result1 = mysqli_query($con,$sql1);
    
    while($row = mysqli_fetch_array($result1)){
        $empID = $row["IDpsnl"];
        $ThaiName = $row["NThai"];
        $imgPath = $row["imgPath"];
        $Edurank = $row["Edurank"];
    
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
    <link rel="stylesheet" href="style_approve.css">
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
                <li ><a href="#"><i class="fa fa-home"></i>หน้าหลัก</a></li>

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
                       <!--  <li><a href="definewel.php">เกณฑ์การใช้วสวัสดิการ</a></li> -->
                        <li><a href="detailwel.php">รายละเอียดการใช้สวัสดิการ</a></li>
                        <!-- <li><a href="#">พิจารณาการใช้สวัสดิการ</a></li> -->
                        <li class="active"><a href="approve.php">อนุมัติการใช้สวัสดิการ</a></li>
                        <li><a href="report.php">รายงานสรุปการใช้สวัสดิการ</a></li>
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
                        <li><a href="hranalytics.php">Dashboard</a></li>
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
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" id="user_name">
                                        <img src="../<?php echo $imgPath; ?>" height="40px" style="border-radius: 50%;" />
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
                                <div class="media1">
                                    <div class="media-body" >
                                        <h4 class="media-heading" ><b>อนุมัติการใช้สวัสดิการ</b>
                                    </div>
                                </div>
                       
                            
                                  

                                            <div class="media">
                                                <div id="col">
                                                    <div class="header">
                                                    รายการคำร้องขอการใช้สวัสดิการ

                                        </div>
                                    </div>
                                
                             
                    
                        

                    
                    
                                        <div class="media">
                                        
                                                <div class="media-body" >
                                             
                                                </div>  
                                            </div>
                                            
                                            
                                                <?php

                                                    include('config.php');  
                                                    
                                                    $sql = "SELECT * FROM benefittotal";

                                                    $query = mysqli_query($con,$sql);

                                                    ?>
                                                       <form class="form-inline" name="status" method="post" action="approve.php" align="center" >
                                   
                                                    <div class="container" id="manager" >
                                                    <table class="table"   id="chlids"  colspan="2">
                                                        <tr>
                                                        
                                                          
                                                            <th>รหัสบุคลากร</th>   
                                                            <th>ชื่อบุคลากร</th>                                        
                                                            <th>ประเภทสวัสดิการ</th>
                                                            <th>จำนวนเงิน</th>
                                                            <th>ผลการอนุมัติ</th>
                                                        </tr>
                        
                                                        <?php while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                                                        {
                                                        ?>
                                                        <tr>
                                          
                                                            <td align="center"><?php echo $result['pid'];?></td>
                                                            <?php
                                                             
                                                               
                                                                ?>
                                                            <td align="center"><?php echo $result['namepn'];?></td>
                                                            <td align="center"><?php echo $result['typebenefit'];?></td>
                                                            <td align="center"><?php echo $result['cmoney'];?></td></td>
                                                            <td align="center">

                                                            <select class="form-control" name=<?php echo $result["pid"];?> id=<?php echo $result["pid"];?> class="form-select" aria-label="Default select example">
                                                                <option <?php echo $result['actions'];?>><?php echo $result['actions'];?></option>
                                                                <option value="ผ่านการอนุมัติ">ผ่านการอนุมัติ</option>
                                                                <option value="ไม่ผ่านการอนุมัติ">ไม่ผ่านการอนุมัติ</option>
                                                            </select></td>
                                                        
                                                            <?php
                                                            }
                                                            
                                                            ?>
                                                            
                                                        
                                                            </tr>
                                                    </table>
                                                        <?php mysqli_close($con); ?>   
                                                </div>  
                                            </div> 
                                            
                                        </div> 
                                    </div> 
                                </div>
                                <br/><br/>
                                           <!--news2-->
                                                <div align="right"  class="container">
                                                <Button  class="btn btn-success" value="บันทึก" data-toggle="modal" data-target="#myModal" onclick="add()" >
                                                <span>บันทึก</span>
                                                </Button>
                                                       
                                   </form>
                                   
                                                      
                                                </div> <br>
                                                
           

                                                <!-- Modal -->
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
                                <!--news3-->
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
      function add(){
             <?php
      
            include('config.php');  
              
              $sql = "SELECT * FROM benefittotal ";

              $query = mysqli_query($con,$sql);
              while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){

                  $sum = $result['pid'];
                $p=$_POST[$sum] ;
                $sql3 = "UPDATE benefittotal SET actions='".$p."' WHERE pid='". $sum."'";
               $query3 = mysqli_query($con,$sql3);
                
              }
                ?>
               
            }
            

        </script>
</body>

</html>