<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_page1_De.css">
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
    <title>page1_De</title>
</head>
<body>
<form>
    <section>
            <div class="page1_De" align="center" >
                อนุมัติการใช้สวัสดิการ
             </div><br>
            <div id="col">
                    <div class="header">
                        รายการคำร้อง
                    </div><hr><br>
                </div>
            </div>

                <div class="container" id="col2">
                    <label>วันที่ทำการ</label>
                    <div><br>
                        <input type="date" class="form-control" id="input" name="member">
                    </div><br>
                </div>
                

                <div class="container" id="employees" >        
                <table class="table" colspan="2">
                    <thead>
                    <tr>
                        <th>เลือก</th>
                        <th>ผลการอนุมัติ</th>
                        <th>ประเภทสวัสสดิการ</th>
                        <th>ไฟล์แนบ</th>
                        <th>ชื่อผู้ขอ</th>
                        <th>จำนวนเงิน</th>
                        <th>หมายเหตุ</th>
                        <th>ดูรายละเอียด</th>
                        <th>แก้ไข</th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center"><img  src="images/eye.png" width="20" height="20"/></td>   
                        <td align="center"><img  src="images/edit.png" width="20" height="20"/></td>  
                    </tr>
                    </thead>
                </table>
                </div>
              
                <div align="right"  class="container">
                    <input type="submit" class="btn btn-success" value="บันทึก" style=" font-family: 'Mitr', sans-serif;">
                </div> 

            </div>    
    </section>
</form>
</body>
</html>
