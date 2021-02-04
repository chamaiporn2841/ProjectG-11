

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
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="media" style="padding-bottom: 200px; width: 100%;">
                                                    <div class="header">
                                                        <canvas id="myChart1" width="600" height="250" ></canvas>
                                                    </div><br><br>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media" style="padding-bottom: 200px; width: 100%;">
                                                    <div class="header">
                                                    <canvas id="myChart2" width="400" height="200" ></canvas>
                                                    </div><br><br>
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <div class="media" style="padding-bottom: 200px; width: 100%;">
                                                    <div class="header">
                                                    <canvas id="myChart3" width="600" height="500" ></canvas>
                                                    </div><br><br>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media" style="padding-bottom: 200px; width: 100%;">
                                                    <div class="header">
                                                    <canvas id="myChart4" width="400" height="200" ></canvas>
                                                    <canvas id="myChart5" width="400" height="200" ></canvas>
                                                    </div><br><br>
                                                </div>
                                            </td>
                                        </tr> 
                                    
                                    </table> 
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
                                                                text: 'สรุปการใช้งบประมาณสวัสดิการ'
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
                                                                    text: 'สรุปการประเมิน'
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
                                                        text: 'สรุปผลการลา'
                                                    }
                                                }
                                            });
                                            </script>
                                            <!--  #g4 -->
                                        <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "12345";
                                            $dbname = "benefit";
                                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                            if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                            }
                                            $sql = "SELECT `IDsum`, COUNT(IDregis) As ls1 FROM regislesson WHERE `IDsum` LIKE 'l001';";
                                            $sql2 = "SELECT `IDsum`, COUNT(IDregis) As ls2 FROM regislesson WHERE `IDsum` LIKE 'l002';";
                                            $sql3 = "SELECT `IDsum`, COUNT(IDregis) As ls3 FROM regislesson WHERE `IDsum` LIKE 'l003';";
                                            $sql4 = "SELECT `IDsum`, COUNT(IDregis) As ls4 FROM regislesson WHERE `IDsum` LIKE 'l004';";
                                            $sql5 = "SELECT `IDsum`, COUNT(IDregis) As ls5 FROM regislesson WHERE `IDsum` LIKE 'l005';";
                                            $sql6 = "SELECT `IDsum`, COUNT(IDregis) As ls6 FROM regislesson WHERE `IDsum` LIKE 'l006';";
                                            $sql7 = "SELECT `IDregis`, COUNT(IDregis) As ls7 FROM regislesson WHERE `IDregis` LIKE '570001';";
                                            $sql8 = "SELECT `IDsum`, COUNT(IDregis) As ls8 FROM regislesson WHERE `IDsum` LIKE '620001';";
                                            $sql9 = "SELECT `IDsum`, COUNT(IDregis) As ls9 FROM regislesson WHERE `IDsum` LIKE '570003';";
                                            $sql10 = "SELECT `IDsum`, COUNT(IDregis) As ls10 FROM regislesson WHERE `IDsum` LIKE '570004';";
                                    


                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    $labels[] = 'การจินตทัศน์ข้อมูลทางธุรกิจ';

                                                    $data[] = $row['ls1'];
                                                }
                                            }
                                            $result2 = mysqli_query($conn, $sql2);

                                            if (mysqli_num_rows($result2) > 0) {

                                                while ($row2 = mysqli_fetch_assoc($result2)) {

                                                    $labels[] = 'การบริหารจัดการข้อมูลองค์กร';

                                                    $data[] = $row2['ls2'];
                                                }
                                            }
                                            $result3 = mysqli_query($conn, $sql3);

                                            if (mysqli_num_rows($result3) > 0) {

                                                while ($row3 = mysqli_fetch_assoc($result3)) {

                                                    $labels[] = 'ธุรกิจอัจฉริยะเพื่อการเปลี่ยนผ่านสู่ดิจิทัล';

                                                    $data[] = $row3['ls3'];
                                                }
                                            }
                                            $result4 = mysqli_query($conn, $sql4);

                                            if (mysqli_num_rows($result4) > 0) {

                                                while ($row4 = mysqli_fetch_assoc($result4)) {

                                                    $labels[] = 'การสื่อสารในภาวะวิกฤติในองค์กรสื่อดิจิทัล';

                                                    $data[] = $row4['ls4'];
                                                }
                                            }
                                            $result5 = mysqli_query($conn, $sql5);

                                            if (mysqli_num_rows($result5) > 0) {

                                                while ($row5 = mysqli_fetch_assoc($result5)) {

                                                    $labels[] = 'ความมั่นคงปลอดภัยไซเบอร์สำหรับประชาชนทั่วไป';

                                                    $data[] = $row5['ls5'];
                                                }
                                            }
                                            $result6 = mysqli_query($conn, $sql6);

                                            if (mysqli_num_rows($result6) > 0) {

                                                while ($row6 = mysqli_fetch_assoc($result6)) {

                                                    $labels[] = 'ธรรมาภิบาลข้อมูล';

                                                    $data[] = $row6['ls6'];
                                                }
                                            }
                                            $result7 = mysqli_query($conn, $sql7);

                                        if (mysqli_num_rows($result7) > 0) {

                                            while ($row7 = mysqli_fetch_assoc($result7)) {

                                                $labels2[] = '620001';

                                                $data2[] = $row7['ls7'];
                                            }
                                        }
                                        $result8 = mysqli_query($conn, $sql8);

                                        if (mysqli_num_rows($result6) > 0) {

                                            while ($row8 = mysqli_fetch_assoc($result8)) {

                                                $labels2[] = '570002';

                                                $data2[] = $row8['ls8'];
                                            }
                                        }
                                        $result9 = mysqli_query($conn, $sql9);

                                        if (mysqli_num_rows($result9) > 0) {

                                            while ($row9 = mysqli_fetch_assoc($result9)) {

                                                $labels2[] = '570003';

                                                $data2[] = $row9['ls9'];
                                            }
                                        }
                                        $result10 = mysqli_query($conn, $sql10);

                                        if (mysqli_num_rows($result10) > 0) {

                                            while ($row10 = mysqli_fetch_assoc($result10)) {

                                                $labels2[] = '570004';

                                                $data2[] = $row10['ls10'];
                                            }
                                        }

                                        mysqli_close($conn);
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
                                                        text: 'สรุปสถิติการเข้าเรียนแต่ละรายวิชารวม'
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
                                                text: 'สรุปสถิติการเข้าเรียนของพนักงานรายบุคคล'
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