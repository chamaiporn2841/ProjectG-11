<html>
<head>
    <title>welfare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<!--Side bar-->
<div class="sidenav">
    <!--logo-->
    <div style="background-color: white;height: 100px;width: 240px;margin: 15px;border-radius: 1rem;">
        <img class="logo" src="images/logo.png"/>
    </div>
    <a href="#home"><b>เมนูหลัก</b></a>
    <hr width=80% size=2 color="#fff" style="margin: 5px 5px 5px 15px;">
    <a href="template.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องสวัสดิการค่ารักษาพยาบาล</a>
    <a href="template2.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องสวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</a>
    <a href="template3.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องสวัสดิการกองทุนสำรองเลี้ยงชีพ</a>
    <a href="template4.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</a>
    <a href="template5.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องสวัสดิการฌาปนกิจสงเคราะห์</a>
    <a href="template6.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;แบบคำร้องสวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</a>
    <a href="template7.php"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;ผลการดำเนินการ</a>

</div>



<div class="content">
    <!-- Top container-->
    <div class="top-container" style="z-index:4">
        <div style="padding:15px 15px 15px 50px;display: inline-block;">
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

        <div class="dropdown">
            <table class="user-table">
                <tr class="user-tr">
                    <td class="user-td"><img class="user" src="images/user1.jpg"/></td>
                    <td class="user-td">ฉัตรภัสร์ ฐิติอัคราวงศ์</td>
                    <td class="user-td"><i class="dropbtn fa fa-chevron-down"></i></td>
                </tr>
            </table>
            <div class="dropdown-content">
                <a href="#"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;เปลี่ยนรหัสผ่าน</a>
                <a href="#"><i class="fa fa-circle-o fa-fw" style="font-size: 12px;"></i>&ensp;ออกจากระบบ</a>
            </div>
        </div>
    </div>

    <section>

        <div>
            </div><br>  
            </div><br>
    </section>
        </div>
    <form id="page2" > 
    <div class="container">
 
  <div class="panel ">
    <div class="panel-body"></div>
    <div >
            <?php
            include_once("page8.php");
            ?>
        </div>
  </div>
</div>
      
       
    </form>
</body>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("sidedd-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }
    </script>

</html>