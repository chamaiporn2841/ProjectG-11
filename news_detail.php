<?php
session_start(); 

/*echo $_SESSION["username"]; */

include("proj_connection.php");

$username = $_SESSION["username"];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบบริหารทรัพยากรบุคคล - DigiTech</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font.css">
    <!-- Script -->
    <script src="assets/jqueryv1.8.3.min.js"></script>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/script.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>

    <div class="wrapper">

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a href="javascript:history.back()"><button type="button"
                                            class="btn btn-primary navbar-btn">
                                            <i class="fa fa-chevron-left" style="padding-right: 10px;"></i>กลับ</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>

            <main>
                <?php
                    $sql2= "SELECT * FROM news Where n_ID = '".$_GET["n_ID"]."' ";
                    $result2 = mysqli_query($con,$sql2);
                    
                    while($row2 = mysqli_fetch_array($result2)){
                        $n_ID = $row2["n_ID"];
                        $N_title= $row2["N_title"];
                        $N_Des = $row2["N_Des"];
                        $N_img = $row2["N_img"];
                        $N_date = $row2["N_date"];
                        $N_Stamp = $row2["N_Stamp"];
                    
 
                        function DateThai($strDate)
                        {
                            $strYear = date("Y",strtotime($strDate))+543;
                            $strMonth= date("n",strtotime($strDate));
                            $strDay= date("j",strtotime($strDate));
                            $strHour= date("H",strtotime($strDate));
                            $strMinute= date("i",strtotime($strDate));
                            $strSeconds= date("s",strtotime($strDate));
                            $strMonthCut = Array("","มกราคม.","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
                            $strMonthThai=$strMonthCut[$strMonth];
                            return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
                        }
                    
                        $strDate = $N_date;
                
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 headerpage">
                            <div class="row">
                                <div class="col-md-9">
                                    <h4><i class="fa fa-pencil-square-o"></i><?php echo $N_title;?></h4>
                                </div>
                                <div class="col-md-3">
                                    <small
                                        style="float:right;display:inline;padding-top:20px;padding-right:20px;">บันทึกเมื่อ
                                        <?php echo DateThai($strDate); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mycontent">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="height:40px"></div>
                                    <img src="<?php echo $N_img;?>" width="100%" />
                                    <div style="height:40px"></div>
                                </div>

                                <div class="col-md-6">
                                    <div style="height:40px"></div>
                                    <?php echo $N_Des; }?>
                                    <div style="height:40px"></div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div style="height:40px"></div>

            </main>

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

</body>

</html>