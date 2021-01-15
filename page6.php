<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_page6.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <STYLE type=text/css>
        A:link {COLOR: #ff00d0; TEXT-DECORATION: none}
        A:visited {COLOR: #660000; TEXT-DECORATION: none}
        A:hover {COLOR: #000000; TEXT-DECORATION: underline}
    </STYLE>
    <title>page6</title>
</head>
<body>
<form>
    <section>
            <div class="page6">
                สวัสดิการฌาปนกิจสงเคราะห์
            </div><br>
        <div  id="col">
                    <div class="header">
                    
                        ข้อมูลส่วนตัว
                    </div><hr><br>
                </div>

             
                <div class="container" id="col1">
                    <label>รหัสบุคลากร</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                  
                </div>

                <div  class="container" id="col2">
                <label>ชื่อบุคลากร</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="state">
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <label>ตำแหน่ง</label>
                    <div><br>
                    <select  name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="บิดา">บิดา</option>
                            <option value="มารดา">มารดา</option>
                            <option value="คู่สมรส">คู่สมรส</option>
                            <option value="บุตร">บุตร</option>
                        </select>
                    </div><br>
                </div>

                <div class="container"  id="col1">
                    <label>ประเภทบุคลากร</label>
                    <div><br>
                    <select  name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="บิดา">บิดา</option>
                            <option value="มารดา">มารดา</option>
                            <option value="คู่สมรส">คู่สมรส</option>
                            <option value="บุตร">บุตร</option>
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label>ผู้เสียชีวิตเกี่ยวข้องเป็น</label>
                    <div><br>
                    <select  name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="บิดา">บิดา</option>
                            <option value="มารดา">มารดา</option>
                            <option value="คู่สมรส">คู่สมรส</option>
                            <option value="บุตร">บุตร</option>
                        </select>
                    </div><br>  
                </div>

                <div class="container" id="col3">
                    <label>ชื่อผู้เสียชีวิต</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="state">
                    </div><br>
                </div>

                <div class="container" id="col1">
                    <label>วันที่ถึงแก่กรรม</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="member">
                    </div><br>
                </div>

                <div class="container"  id="col2">
                    <label>ระบุจำนวนเงิน</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="state">
                    </div><br>
                </div>

                <div class="container"  id="col">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div id="col">
                    <div class="header">
                        แนบไฟลเอกสารที่เกี่ยวข้อง
                    </div><hr><br>
                </div>
                
                <div class="container" id="col1">
                    <div><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>1. สำเนาใบมรณบัตร</label>
                    </form>
                    </div><br> 

                    <div><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>2. สำเนาทะเบียนบ้าน (ผู้ขอรับสวัสดิการ)</label>
                    </form>
                    </div><br>

                    <div><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>3. สำเนาประจำตัวประชาชน (ผู้ขอรับสวัสดิการ)</label>
                    </form>
                    </div><br>

                    <div><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>4. สำเนาทะเบียนบ้านของผู้ถึงแก่กรรม ที่ประทับคำว่า “ตาย”</label>
                    </form>
                    </div><br>

                    <div><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>5. ใบเสร็จค่าพวงหรีด</label>
                    </form>
                    </div><br>

                </div>
                    
                <div class="container"  id="col2">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <div><br>
                            <input class= "imgfile" type="file" name="fileToUpload" id="fileToUpload">
                    </div><br>  
                    <div><br>
                            <input class= "imgfile" type="file" name="fileToUpload" id="fileToUpload">
                    </div><br>  
                    <div><br>
                            <input class= "imgfile" type="file" name="fileToUpload" id="fileToUpload">
                    </div><br>  
                    <div><br>
                            <input class= "imgfile" type="file" name="fileToUpload" id="fileToUpload">
                    </div><br>  
                    <div><br>
                            <input class= "imgfile" type="file" name="fileToUpload" id="fileToUpload">
                    </div><br>  
                </div>


                <div class="container"  id="col1">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div class="container"  id="col2">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>


                <div class="container"  id="col1">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div class="container"  id="col2">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>
              
                <div id="col">
                    <div class="header">
                        รายละเอียดการรับเงิน
                    </div><hr><br>
                </div>

                <div class="container" id="col1">
                    <label>ช่องทางการรับเงิน</label>
                    <div><br>
                    <select  name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="เงินสด">เงินสด</option>
                            <option value="บัญชีธนาคาร">บัญชีธนาคาร</option>
                        </select>
                    </div><br>  
                </div>

                <div class="container" id="col2">
                    <label>บัญชีธนาคาร</label>
                    <div><br>
                    <select  name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="ไทยพานิชย์">ไทยพานิชย์</option>
                            <option value="กรุงไทย">กรุงไทย</option>
                        </select>
                    </div><br>  
                </div>

                <div class="container" id="col3">
                    <label>เลขที่บัญชีี</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="state">
                    </div><br>
                </div>

                <div align="right"  class="container">
                    <input type="submit" class="btn btn-success" value="บันทึก" style=" font-family: 'Mitr', sans-serif;">
                    <input type="reset" class="btn" VALUE="ล้างข้อมูล" style=" font-family: 'Mitr', sans-serif;" >
                </div>
                

            </div>    
    </section>
    </form>
</body>


</html>
