<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_page7.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <STYLE type=text/css>
        A:link {COLOR: #ff00d0; TEXT-DECORATION: none}
        A:visited {COLOR: #660000; TEXT-DECORATION: none}
        A:hover {COLOR: #000000; TEXT-DECORATION: underline}
    </STYLE>
    <title>page7</title>
</head>
<body>
<form>
    <section>
            <div class="page7">
                สวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร
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

                <div class="container" id="col1">
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
                    <label>ชื่อคู่สมรส</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                  
                </div>

                <div class="container"  id="col3">
                    <label>ขอใช้สิทธิเนื่องจาก</label>
                    <div><br>
                        <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="เป็นบิดาโดยชอบกฎหมาย">เป็นบิดาโดยชอบกฎหมาย</option>
                            <option value="เป็นมารดาโดยชอบกฎหมาย">เป็นมารดาโดยชอบกฎหมาย</option>
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col1">
                <label>ขอเบิกเงินการศึกษาของบุตร</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="เงินบํารุงการศึกษา">เงินบํารุงการศึกษา</option>
                            <option value="เงินค่าเล่าเรียน">เงินค่าเล่าเรียน</option>
                        </select>
                    </div><br>
                </div>

            
            

                <div id="col">
                    <div class="header">
                        รายละเอียดของบุตร
                    </div><hr><br>
                </div>
                <div class="container" id="col1">
                    <label>ชื่อบุตร</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label>เกิดเมื่อ</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="member">
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <label>เป็นบุตรลำดับที่</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>    
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col1">
                    <label>สถานศึกษา</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

                <div class="container" id="col2">
                    <label>อำเภอ</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

                <div class="container"  id="col3">
                    <label>ชั้นปีที่ศึกษา</label>
                    <div><br>
                    <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="อนุบาล">อนุบาล</option>
                            <option value="ประถมศึกษา">ประถมศึกษา</option>
                            <option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option> 
                            <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>  
                            <option value="ปริญญาตรี">ปริญญาตรี</option> 
                        </select>
                    </div><br>
                </div>

                <div class="container" id="col1">
                <label>จำนวนเงิน</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

           

                <div id="col">
                    <div class="header">
                        รายละเอียดการรับเงิน
                    </div><hr><br>
                </div>

                <div  class="container" id="col1">
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
