<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_page5.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <STYLE type=text/css>
        A:link {COLOR: #ff00d0; TEXT-DECORATION: none}
        A:visited {COLOR: #660000; TEXT-DECORATION: none}
        A:hover {COLOR: #000000; TEXT-DECORATION: underline}
    </STYLE>
    <title>page5</title>
</head>
<body>
    <form>
        <section>
                <div class="page5">
                    แบบคำร้องขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว
                </div><br>
                <div>
                <div id="col">
                    <div class="header">
                        ข้อมูลส่วนตัว
                    </div><hr><br>
                </div>

                <div class="container" id="col1">
                    <label>รหัสบุคลากร</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" idem="id">
                    </div><br>
                </div>

                <div class="container" id="col2">
                    
                    <label>ชื่อบุคลากร</label>     
                    <div><br>
                    <input type="text" class="form-control" id="input" idem="id">
                    </div><br>
                   
                </div>

                <div class="container" id="col3">
                    <label>ตำแหน่ง</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="วิชาการ">วิชาการ</option>
                            <option value="ปฏิบัติการวิชาชีพและบริหารทั่วไป">ปฏิบัติการวิชาชีพและบริหารทั่วไป</option>
                            <option value="บริหารวิชาการ">บริหารวิชาการ</option>
                        </select> 
                    </div><br>
                </div>

                <div class="container"  id="col1">
                    <label>ประเภทบุคลากร</label>
                    <div><br>
                    <select name="position" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="หัวหน้าโครงการ">หัวหน้าโครงการ</option>
                            <option value="คณาจารย์">คณาจารย์</option>
                            <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                            <option value="ผู้ช่วยสอน">ผู้ช่วยสอน</option>
                            </select> 
                    </div><br>  
                </div>
              
                <div  class="container" id="col2">
                    <label>หมายเลขโทรศัพท์</label>
                    <div><br>
                    <input type="text" class="form-control" id="input" idem="id">
                    </div><br>  
                </div>

                <div  class="container" id="col3">
                    <label></label>
                    <div><br>
                    
                    </div><br>  
                </div>

                <div id="col">
                    <div class="header">
                        ข้อมูลการขอยืม
                    </div><hr><br>
                </div>

                <div class="container" id="col1">
                    <label>ระบุจำนวนเงิน</label>
                    <div><br>
                    <input type="text" class="form-control" id="input" amount="amount">
                    </div><br>
                </div>
                <div class="container" id="col2">
                    <label>ช่องทางการรับเงิน</label>
                    <div><br>
                    <select name="recievemouney" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="โอนเงินเข้าบัญชี">โอนเงินเข้าบัญชี</option>
                            <option value="เงินสด">เงินสด</option>
                        </select>
                    </div><br>
                </div>
                <div class="container" id="col3">
                    <label>บัญชีธนาคาร</label>
                    <div><br>
                    <select name="bank" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                            <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                        </select>
                    </div><br>
                </div>
                <div class="container" id="col1">
                    <label>เลขที่บัญชี</label>
                    <div><br>
                    <input type="text" class="form-control" id="input" number="number">
                    </div><br>
                </div>
                
                <div align="right"  class="container" id="col9">
                    <input type="submit" class="btn btn-success" value="บันทึก" style=" font-family: 'Mitr', sans-serif;">
                    <input type="reset" class="btn" VALUE="ล้างข้อมูล" style=" font-family: 'Mitr', sans-serif;" >
                </div>  
            </section>
        </form>
    </body>
</html>