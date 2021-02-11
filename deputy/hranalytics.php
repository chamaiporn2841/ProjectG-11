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
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="news-slider.css">
    <!-- Script -->
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- dashboard -->
    <!-- Bootstrap core CSS     -->
   

 

    <!--  Light Bootstrap Table core CSS    -->
<!--   <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>  -->




   
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
                        <li><a href="detailwel.php">รายละเอียดการใช้สวัสดิการ</a></li>
                       <!--  <li><a href="consider.php">พิจารณาการใช้สวัสดิการ</a></li> -->
                        <li><a href="approve.php">อนุมัติการใช้สวัสดิการ</a></li>
                        <li><a href="report.php">รายงานสรุปการใช้สวัสดิการ</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#formSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-pencil-square-o"></i>
                        คำร้องออนไลน์
                    </a>
                   <!--  <ul class="collapse list-unstyled" id="formSubmenu">
                        <li><a href="">คำร้องขอแก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="#">คำร้องขอลา</a></li>
                        <li><a href="medexp.php">คำร้องสวัสดิการค่ารักษาพยาบาล</a></li>
                        <li><a href="comdevice.php">คำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a></li>
                        <li><a href="profund.php">คำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a></li>
                        <li><a href="uniform.php">คำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a></li>
                        <li><a href="funeral.php">คำร้องสวัสดิการฌาปนกิจสงเคราะห์</a></li>
                        <li><a href="tuitionfee.php">คำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a></li>
                        <li><a href="opresult.php">ติดตามผลคำร้อง</a></li>
                    </ul> -->
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
                        <li class="active"><a href="hranalytics.php">Dashboard</a></li>
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
                                            id="user_name">ผศ. ดร.ธรา อั่งสกุล</button>
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
                                  <div class="media1" > 
                                        <div class="media-body" >
                                            <h4 class="media-heading" ><b>Dashboard</b>
                                        </div>
                                    </div>
                                    
                                   
                                    <br>
                                  
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="media">
                                                    <div class="header">
                                                       <!--  <h4 class="title">Email Statistics</h4> -->
                                                        <h4  align="center">สรุปการประเมิน</h4>
                                                    </div>
                                                    <div class="content">
                                                    <canvas id="myChart2" width="800" height="800" ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                       

                                              
                                                    <div class="col-md-8">
                                                        <div class="media">
                                                            <div class="header">
                                                                <!-- <h4 class="title">Users Behavior</h4> -->
                                                                <h4  align="center" >สรุปการใช้งบประมาณสวัสดิการ</h4>
                                                            </div>
                                                            <div class="content">
                                                            <canvas id="myChart1" width="300" height="144" ></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>    
                                  
                                            <br>
                                          
                                                    <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="media ">
                                                                    <div class="header">
                                                                        <!-- <h4>Talent Management and Learning Management</h4> -->
                                                                        <h4 align="center" >สรุปสถิติการเข้าเรียนของพนักงานรายบุคคล</h4>
                                                                    </div>
                                                                    <div class="content">
                                                                    <canvas id="myChart5" width="300" height="200" ></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="media ">
                                                                    <div class="header">
                                                                       <!--  <h4 class="title">Talent Management and Learning Management</h4> -->
                                                                        <h4 align="center" >สรุปสถิติการเข้าเรียนแต่ละรายวิชา</h4>
                                                                    </div>
                                                                    <div class="content">
                                                                    <canvas id="myChart4" width="200" height="150" ></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="media ">
                                                                    <div class="header">
                                                                       <!--  <h4 class="title">2014 Sales</h4> -->
                                                                        <h4 align="center" >สรุปผลการลา</h4>
                                                                    </div>
                                                                    <div class="content">
                                                                    <canvas id="myChart3" width="200" height="150" ></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                       
                                                   
                                                    
                                                

                                             
                                    <?php
                                        include 'config.php';
                                        mysqli_query($con, "SET NAMES 'utf8' ");
                                        $query = "
                                        SELECT cmoney, SUM(cmoney) AS totol1, DATE_FORMAT(datesave, '%M %Y') AS datesave
                                        FROM benefittotal
                                        GROUP BY DATE_FORMAT(datesave, '%m%')
                                        ORDER BY DATE_FORMAT(datesave, '%Y-%m-%d') DESC
                                        ";
                                        $result = mysqli_query($con, $query);
                                        $resultchart = mysqli_query($con, $query);
                                        //for chart
                                        $datesave = array();
                                        $totol1 = array();
                                        while ($rs = mysqli_fetch_array($resultchart)) {
                                            $datesave[] = "\"" . $rs['datesave'] . "\"";
                                            $totol1[] = "\"" . $rs['totol1'] . "\"";
                                        }
                                        $datesave = implode(",", $datesave);
                                        $totol1 = implode(",", $totol1);

                                        ?>
                                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
            
                                                <script>
                                                    var ctx = document.getElementById("myChart1").getContext('2d');
                                                    var myChart = new Chart(ctx, {
                                                        type: 'line',
                                                        data: {
                                                            labels: [<?php echo $datesave; ?>

                                                            ],
                                                            datasets: [{
                                                                label: 'แยกตามเดือน (บาท)',
                                                                data: [<?php echo $totol1; ?>],
                                                                backgroundColor: [
                                                                    'rgba(255, 99, 132, 0.2)',
                                                                    'rgba(54, 162, 235, 0.2)',
                                                                    'rgba(255, 206, 86, 0.2)',
                                                                    'rgba(75, 192, 192, 0.2)',
                                                                    'rgba(153, 102, 255, 0.2)',
                                                                    'rgba(255, 159, 64, 0.2)'
                                                                ],
                                                                borderColor: [
                                                                    'rgba(255,99,132,1)',
                                                                    'rgba(54, 162, 235, 1)',
                                                                    'rgba(255, 206, 86, 1)',
                                                                    'rgba(75, 192, 192, 1)',
                                                                    'rgba(153, 102, 255, 1)',
                                                                    'rgba(255, 159, 64, 1)'
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                        },
                                                        options: {
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero: true
                                                                    }
                                                                }]
                                                            },
                                                            responsive: true,
                                                            title: {
                                                                display: true,
                                                                text: ''
                                                            }
                                                            }
                                                        });
                                                </script>
                                         <!--  #g2 -->
                                         <?php
                                                include 'config.php';

                                                mysqli_query($con, "SET NAMES 'utf8' ");

                                                $query = " SELECT phase1_Score, phase2_Score, phase3_Score FROM evaluate WHERE 1";
                                                $graph = " SELECT phase1_Score, phase2_Score, phase3_Score, total_Score FROM evaluate WHERE 1";
                                                $result = mysqli_query($con, $query);
                                                $result_graph = mysqli_query($con, $graph);

                                                if (mysqli_num_rows($result_graph) > 0) {

                                                    while ($row = mysqli_fetch_assoc($result_graph)) {

                                                        $labels[] = $row['total_Score'];

                                                        $data[] = $row['total_Score'];
                                                    }
                                                }


                                                ?>

                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

                                                    <script>
                                                        var ctx = document.getElementById("myChart2");
                                                        var myChart2 = new Chart(ctx, {
                                                            type: 'bar',
                                                            data: {
                                                                labels: <?= json_encode($labels) ?>,
                                                                datasets: [{
                                                                    label: '',
                                                                    data: <?= json_encode($data, JSON_NUMERIC_CHECK); ?>,
                                                                    backgroundColor: [
                                                                        'rgba(255, 99, 132, 0.2)',
                                                                        'rgba(54, 162, 235, 0.2)',
                                                                        'rgba(255, 206, 86, 0.2)',
                                                                        'rgba(75, 192, 192, 0.2)',
                                                                        'rgba(153, 102, 255, 0.2)',
                                                                        'rgba(255, 159, 64, 0.2)'
                                                                    ],
                                                                    borderColor: [
                                                                        'rgba(255,99,132,1)',
                                                                        'rgba(54, 162, 235, 1)',
                                                                        'rgba(255, 206, 86, 1)',
                                                                        'rgba(75, 192, 192, 1)',
                                                                        'rgba(153, 102, 255, 1)',
                                                                        'rgba(255, 159, 64, 1)'
                                                                    ],
                                                                    borderWidth: 1
                                                                }]
                                                            },
                                                            options: {
                                                                scales: {
                                                                    yAxes: [{
                                                                        ticks: {
                                                                            beginAtZero: true
                                                                        }
                                                                    }]
                                                                },
                                                                responsive: true,
                                                                title: {
                                                                    display: true,
                                                                    text: ''
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                 <!--  #g3 -->
                                                 <?php
                                                        include 'config.php';
                                                        $sql = "SELECT COUNT(FL_Type) As fl FROM form_leave_transaction WHERE FL_Type LIKE 'ลากิจ%' ";
                                                        $sql2 = "SELECT COUNT(FL_Type) As fl2 FROM form_leave_transaction WHERE FL_Type LIKE '%ป่วย%' ";
                                                        $sql3 = "SELECT COUNT(FL_Type) As fl3 FROM form_leave_transaction WHERE FL_Type LIKE '%พักผ่อน%' ";
                                                        $sql4 = "SELECT COUNT(FL_Type) As fl4 FROM form_leave_transaction WHERE FL_Type LIKE '%คลอดบุตร%' ";
                                                        $sql5 = "SELECT COUNT(FL_Type) As fl5 FROM form_leave_transaction WHERE FL_Type LIKE '%อุปสมบท%' || '%ประกอบพิธี%' || '%เตรียมพล%' ";

                                                        $result = mysqli_query($con, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $labels[] = "ลากิจ";
                                                                $data[] = $row['fl'];
                                                            }
                                                        }

                                                        $result2 = mysqli_query($con, $sql2);
                                                        if (mysqli_num_rows($result2) > 0) {
                                                            while($row2 = mysqli_fetch_assoc($result2)) {
                                                                $labels[] = "ลาป่วย";
                                                                $data[] = $row2['fl2'];
                                                            }
                                                        }

                                                        $result3 = mysqli_query($con, $sql3);
                                                        if (mysqli_num_rows($result3) > 0) {
                                                            while($row3 = mysqli_fetch_assoc($result3)) {
                                                                $labels[] = "ลาพักผ่อน";
                                                                $data[] = $row3['fl3'];
                                                            }
                                                        }

                                                        $result4 = mysqli_query($con, $sql4);
                                                        if (mysqli_num_rows($result4) > 0) {
                                                            while($row4 = mysqli_fetch_assoc($result4)) {
                                                                $labels[] = "ลาคลอดบุตร";
                                                                $data[] = $row4['fl4'];
                                                            }
                                                        }

                                                        $result5 = mysqli_query($con, $sql5);
                                                        if (mysqli_num_rows($result5) > 0) {
                                                            while($row5 = mysqli_fetch_assoc($result5)) {
                                                                $labels[] = "อื่นๆ";
                                                                $data[] = $row5['fl5'];
                                                            }
                                                        }
                                                    
                                                        mysqli_close($con);
                                                        
                                                    ?>
                                                    <script>
                                            var ctx = document.getElementById("myChart3");
                                            var myChart1 = new Chart(ctx, {
                                                //type: 'bar',
                                                //type: 'line',
                                                type: 'pie',
                                                data: {
                                                    labels: <?=json_encode($labels)?>,
                                                    datasets: [{
                                                        label: 'Report',
                                                        data: <?=json_encode($data, JSON_NUMERIC_CHECK);?>,
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)',
                                                        ],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)',
                                                        ],
                                                        borderWidth: 0
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero:true
                                                            }
                                                        }]
                                                    },
                                                    responsive: true,
                                                    title: {
                                                        display: true,
                                                        text: ''
                                                    }
                                                }
                                            });
                                            </script>
                                            <!--  #g4 -->
                                        <?php
                                            include 'config.php';
                                            $sql11 = "SELECT `IDsum`, COUNT(IDregis) As ls11 FROM regislesson WHERE `IDsum` LIKE 'l001';";
                                            $sql22 = "SELECT `IDsum`, COUNT(IDregis) As ls22 FROM regislesson WHERE `IDsum` LIKE 'l002';";
                                            $sql33 = "SELECT `IDsum`, COUNT(IDregis) As ls33 FROM regislesson WHERE `IDsum` LIKE 'l003';";
                                            $sql44 = "SELECT `IDsum`, COUNT(IDregis) As ls44 FROM regislesson WHERE `IDsum` LIKE 'l004';";
                                            $sql55 = "SELECT `IDsum`, COUNT(IDregis) As ls55 FROM regislesson WHERE `IDsum` LIKE 'l005';";
                                            $sql66 = "SELECT `IDsum`, COUNT(IDregis) As ls66 FROM regislesson WHERE `IDsum` LIKE 'l006';";
                                            $sql77 = "SELECT `IDregis`, COUNT(IDregis) As ls77 FROM regislesson WHERE `IDregis` LIKE '570001';";
                                            $sql88 = "SELECT `IDsum`, COUNT(IDregis) As ls88 FROM regislesson WHERE `IDsum` LIKE '620001';";
                                            $sql99 = "SELECT `IDsum`, COUNT(IDregis) As ls99 FROM regislesson WHERE `IDsum` LIKE '570003';";
                                            $sql100 = "SELECT `IDsum`, COUNT(IDregis) As ls100 FROM regislesson WHERE `IDsum` LIKE '570004';";
                                    


                                            $result11 = mysqli_query($con, $sql11);

                                            if (mysqli_num_rows($result11) > 0) {

                                                while ($row11 = mysqli_fetch_assoc($result11)) {

                                                    $labels[] = 'การจินตทัศน์ข้อมูลทางธุรกิจ';

                                                    $data[] = $row11['ls11'];
                                                }
                                            }
                                            $result22 = mysqli_query($con, $sql22);

                                            if (mysqli_num_rows($result22) > 0) {

                                                while ($row22 = mysqli_fetch_assoc($result22)) {

                                                    $labels[] = 'การบริหารจัดการข้อมูลองค์กร';

                                                    $data[] = $row22['ls22'];
                                                }
                                            }
                                            $result33 = mysqli_query($con, $sql33);

                                            if (mysqli_num_rows($result33) > 0) {

                                                while ($row33 = mysqli_fetch_assoc($result33)) {

                                                    $labels[] = 'ธุรกิจอัจฉริยะเพื่อการเปลี่ยนผ่านสู่ดิจิทัล';

                                                    $data[] = $row33['ls33'];
                                                }
                                            }
                                            $result44 = mysqli_query($con, $sql44);

                                            if (mysqli_num_rows($result44) > 0) {

                                                while ($row44 = mysqli_fetch_assoc($result44)) {

                                                    $labels[] = 'การสื่อสารในภาวะวิกฤติในองค์กรสื่อดิจิทัล';

                                                    $data[] = $row44['ls44'];
                                                }
                                            }
                                            $result55 = mysqli_query($con, $sql55);

                                            if (mysqli_num_rows($result55) > 0) {

                                                while ($row55 = mysqli_fetch_assoc($result55)) {

                                                    $labels[] = 'ความมั่นคงปลอดภัยไซเบอร์สำหรับประชาชนทั่วไป';

                                                    $data[] = $row55['ls55'];
                                                }
                                            }
                                            $result66 = mysqli_query($con, $sql66);

                                            if (mysqli_num_rows($result66) > 0) {

                                                while ($row66 = mysqli_fetch_assoc($result66)) {

                                                    $labels[] = 'ธรรมาภิบาลข้อมูล';

                                                    $data[] = $row66['ls66'];
                                                }
                                            }
                                            $result77 = mysqli_query($con, $sql77);

                                        if (mysqli_num_rows($result77) > 0) {

                                            while ($row77 = mysqli_fetch_assoc($result77)) {

                                                $labels2[] = '620001';

                                                $data2[] = $row77['ls77'];
                                            }
                                        }
                                        $result88 = mysqli_query($con, $sql88);

                                        if (mysqli_num_rows($result88) > 0) {

                                            while ($row88 = mysqli_fetch_assoc($result88)) {

                                                $labels2[] = '570002';

                                                $data2[] = $row88['ls88'];
                                            }
                                        }
                                        $result99 = mysqli_query($con, $sql99);

                                        if (mysqli_num_rows($result99) > 0) {

                                            while ($row99 = mysqli_fetch_assoc($result99)) {

                                                $labels2[] = '570003';

                                                $data2[] = $row99['ls99'];
                                            }
                                        }
                                        $result100 = mysqli_query($con, $sql100);

                                        if (mysqli_num_rows($result100) > 0) {

                                            while ($row100 = mysqli_fetch_assoc($result100)) {

                                                $labels2[] = '570004';

                                                $data2[] = $row100['ls100'];
                                            }
                                        }

                                        mysqli_close($con);
                                        ?>
                                           
                                          
                                            <script>
                                            var ctx = document.getElementById("myChart4");
                                            var myChart = new Chart(ctx, {
                                                //type: 'bar',
                                                //type: 'line',
                                                type: 'bar',
                                                data: {
                                                    labels: <?= json_encode($labels) ?>,
                                                    datasets: [{
                                                        label: 'Report',
                                                        data: <?= json_encode($data, JSON_NUMERIC_CHECK); ?>,
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)',
                                                        ],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)',
                                                        ],
                                                        borderWidth: 3
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                    },
                                                    responsive: true,
                                                    title: {
                                                        display: true,
                                                        text: ''
                                                    }
                                                }
                                            });
                                        </script>
                            <script>
                                    var ctx = document.getElementById("myChart5");
                                    var myChart = new Chart(ctx, {
                                        //type: 'bar',
                                        //type: 'line',
                                        type: 'pie',
                                        data: {
                                            labels: <?= json_encode($labels2) ?>,
                                            datasets: [{
                                                label: 'Report',
                                                data: <?= json_encode($data2, JSON_NUMERIC_CHECK); ?>,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)',
                                                ],
                                                borderWidth: 3
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            },
                                            responsive: true,
                                            title: {
                                                display: true,
                                                text: ''
                                            }
                                        }
                                    });
                                </script>
                             



                                                </div>
                                                                          
                                <!--news2-->
                                    
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