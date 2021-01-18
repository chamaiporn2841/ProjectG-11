<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style_page2.css">
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
            <div class="page2" align = "center" >
                เกณฑ์การใช้สวัสดิการ
            </div><br>
            
                <div class="container" id="col1" >
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

                <div class="container" id="col2">
                    <label>วันที่บันทึก</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="date">
                    </div><br>
                </div>

                <div class="container" id="col3">
                    <label>ชื่อผู้บันทึก</label>
                    <div><br>
                        <input type="text" class="form-control" id="input" name="name">
                    </div><br>
                </div>

                <div class="container" id="col">
                    
                    <div></br>
                        
                    </div><br>
                </div>
            
                <div  class="container" id="col">
                    <div class="header">
                        รายละเอียดสวัสดิการ
                    </div><hr><br>
                </div>

                <div  id="col">
                    
                    <div></br>
                        
                    </div><br>
                </div>
                
                <div class="container" id="col2">
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
