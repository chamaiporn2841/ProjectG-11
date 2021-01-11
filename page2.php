<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_page2.css">
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
    <title>page2</title>
</head>
<body>
<form>
    <section>
            <div class="page2">
                สวัสดิการค่ารักษาพยาบาล
            </div><br>
            <div id="col">
                    <div class="header">
                        ข้อมูลส่วนตัว
                    </div><hr><br>
                </div>
            <div>

                <div class="container" id="col1">
                    <label>รหัสบุคลากร</label>
                    <div></br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                  
                </div> 

                <div class="container" id="col2">
                    <label>ชื่อบุคลากร</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                  
                </div>

                <div  class="container" id="col3">
                    <label>ตำแหน่ง</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="วิชาการ">วิชาการ</option>
                            <option value="ปฏิบัติการวิชาชีพและบริหารทั่วไป">ปฏิบัติการวิชาชีพและบริหารทั่วไป</option>
                            <option value="บริหารวิชาการ">บริหารวิชาการ</option>
                        </select>
                    </div><br>
                </div>

                <div class="container"  id="col4">
                    <label>ประเภทบุคลากร</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="หัวหน้าโครงการ">หัวหน้าโครงการ</option>
                            <option value="คณาจารย์">คณาจารย์</option>
                            <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                            <option value="ผู้ช่วยสอน">ผู้ช่วยสอน</option>
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label></label>
                    <div><br>
                        
                    </div><br>
                </div>
                
                <div class="container" id="col3">
                    <label></label>
                    <div><br>
                    
                    </div><br>
                  
                </div>



                

               
                <!-- <div class="container" id="col"> -->
                <div id="col">
                    <div class="header">
                        เบิกค่ารักษาพยาบาล
                    </div><hr><br>
                </div>
                <div>

                <div class="container" id="col1">
                    <label>เบิกค่ารักษาพยาบาลให้กับ</label>
                    <div></br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="ตนเอง">ตนเอง</option>
                            <option value="คู่สมรส">คู่สมรส</option>
                            <option value="บิดา">บิดา</option>
                            <option value="มารดา">มารดา</option>
                            <option value="บุตร">บุตร</option>
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label>ชื่อ-นามสกุล</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                  
                </div>

                <div class="container" id="col3">
                    <label>วัน/เดือน/ปีเกิด</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="date">
                    </div><br>
                </div>

                <div class="container" id="col1">
                    <label>ประเภทสถานพยาบาล</label>
                    <div><br>
                        <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="เอกชน">เอกชน</option>
                            <option value="รัฐบาล">รัฐบาล</option>
                        </select>
                    </div><br>
                </div>


                <div class="container" id="col2">
                    <label>ชื่อสถานพยาบาล</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="hospital">
                    </div><br>  
                </div>

                <div class="container" id="col3">
                    <label>วันที่ทำการรักษาพยาบาล</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="member">
                    </div><br>
                </div>

                <div class="container" id="col1">
                    <label>อาการป่วย</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="state">
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label>จำนวนเงิน</label>
                    <div><br>
                        <input type="number" class="form-control" id="input" name="cash">
                    </div></br>
                </div>

                <div class="container" id="col">
                    
                    <div></br>
                        
                    </div><br>
                </div>







<!-- // -->

             <!-- <div class="container" id="col"> -->
                <div id ="col">
                    <div class="header">
                        รายละเอียดการรับเงิน
                    </div><hr><br>
                </div>
                <div>

                <div class="container" id="col1">
                    <label>ช่องทางรับเงิน</label>
                    <div></br>
                    <select name="category" id="input">
                        <option value="โปรดเลือก">โปรดเลือก</option>
                        <option value="เงินสด">เงินสด</option>
                        <option value="โอนเงินเข้าบัญชีเงินฝาก">โอนเงินเข้าบัญชีเงินฝาก</option>
                    </select>
                    </div></br>
                </div>

                <div class="container" id="col2">
                    <label>บัญชีธนาคาร</label>
                    <div><br>
                        <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="กรุงไทย">กรุงไทย</option>
                            <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col3">
                    <label>เลขที่บัญชี</label>
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
