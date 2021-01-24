<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_page2.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
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
                เกณฑ์การใช้สวัสดิการ
            </div><br>
            
            <div>
                <div class="container" id="col1">
                    <label>ประเภทสวัสดิการ</label>
                    <div><br>
                        <select name="category" id="input">
                            <option value="โปรดเลือก">โปรดเลือก</option>
                            <option value="สวัสดิการค่ารักษาพยาบาล">สวัสดิการค่ารักษาพยาบาล</option>
                            <option value="สวัสดิการซื้ออุปกรณ์คอมพิวเตอร์">สวัสดิการซื้ออุปกรณ์คอมพิวเตอร์</option>
                            <option value="สวัสดิการกองทุนสำรองเลี้ยงชีพ">สวัสดิการกองทุนสำรองเลี้ยงชีพ</option>
                            <option value="สวัสดิการขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว">สวัสดิการขอยืมเงินเพื่อตัดชุดเครื่องแบบปกติขาว</option>
                            <option value="สวัสดิการฌาปนกิจสงเคราะห์">สวัสดิการฌาปนกิจสงเคราะห์</option>
                            <option value="สวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร">สวัสดิการเกี่ยวกับค่าเล่าเรียนบุตร</option>
                        </select>
                    </div><br>
                </div>

                <div  class="container" id="col2">
                    <label>ผู้ใช้สวัสดิการ</label>
                    <div><br>
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

                <div class="container" id="col3">
                    <label>ชื่อผู้บันทึก</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

                <div class="container" id="col">
                    <div class="header">
                        รายละเอียดสวัสดิการ
                    </div><hr><br>
                </div>
                <div class="container" id="col">
                <textarea  name="detail" id="detail" ></textarea>
                </div>

    </section>

<!-- script -->
                <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('detail');
                        function CKupdate() {
                            for (instance in CKEDITOR.instances)
                                CKEDITOR.instances[instance].updateElement();
                        }
                    </script>
     
    
</form>
</body>
</html>
