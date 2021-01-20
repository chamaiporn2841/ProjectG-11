<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_consider.css">
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
    <section>
        
            <div class="consider" >
                พิจารณาการใช้สวัสดิการ
           <div><br>
           </div>
                


                     <div class="container" >
                        <!-- <div class="row" > -->
                            <div class="col-md-12"  >
                                <form class="form-inline" name="searchform" id="searchform">
                                    <div class="form-group" align="center">
                                    <div class="form-inline"  >
                                        <label for="textsearch" >ประเภทสวัสดิการ</label>
                                  
                                         <input type="text" name="itemname" id="itemname" class="form-control" placeholder="ข้อความ คำค้นหา!" autocomplete="off">
                                
                                         <button type="button" class="btn btn-primary" id="btnSearch">
                                            
                                            <span class="glyphicon glyphicon-search"></span>
                                               ค้นหา
                                           </button>
                                
                                        </div>
      
                                    </div> 
  
                                            
                               
                           
                                <div><br></div>     
                        
            
                   
                                <div class="loading"></div>
                                    <div class="row" id="list-data" style="margin-top: 10px;">
                                    </div>
                               </div>
                                <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
                                    <script type="text/javascript">
                                        $(function () {
                                            $("#btnSearch").click(function () {
                                                $.ajax({
                                                        url: "search.php",
                                                        type: "post",
                                                    data: {itemname: $("#itemname").val()},
                                                        beforeSend: function () {
                                                        $(".loading").show();
                                                    },
                                                    complete: function () {
                                                        $(".loading").hide();
                                                    },
                                                    success: function (data) {
                                                        $("#list-data").html(data);
                                                    }
                                                });
                                            });
                                                $("#searchform").on("keyup keypress",function(e){
                                                    var code = e.keycode || e.which;
                                                    if(code==13){
                                                        $("#btnSearch").click();
                                                        return false;
                                                    }
                                                });
                                        });
                                </script>

                          
               
                <div id="col" align="left">
                    <div class="header">
                        รายการอนุมัติ
                    </div><hr>
                </div>

                <div class="container"  id="col1" align="left">
                    <label>ชื่อผู้อนุมัติ</label>
                    
                        <input type="text" class="form-control" id="input" name="name">
                    
                </div>

                <div class="container" id="col2" align="left" >
                    <label>วันที่อนุมัติ</label>
                  
                        <input type="date" class="form-control" id="input" name="name">
                    
                </div>
           
                <div class="container" id="manager" >
                <table class="table"   id="chlids"  colspan="2">
                <tr>
                    <th>เลือก</th>
                    <th>ผลการอนุมัติ</th>
                    <th>ช่องทางการรับเงิน</th>
                    <th>บัญชีธนาคาร</th>
                    <th>ประเภทสวัสดิการ</th>
                    <th>ชื่อผู้ขอ</th>
                    <th>จำนวน</th>
                    <th>จำนวนเงิน</th>
                    <th>ไฟล์เอกสาร</th>
                    <th>หมายเหตุ</th>
                    <th >รายละเอียด</th>
                    <th>แก้ไข</th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="center"><img  src="images/eye.png" width="20" height="20"/></td>
                    <td align="center"><img  src="images/edit.png" width="20" height="20"/></td>
                    <td></td>
                </tr>
                </table>
                </div> 
                <div  class="container"  align="right" >
                    <input type="submit" class="btn btn-success" value="บันทึก" style=" font-family: 'Mitr', sans-serif;">
                </div> 
            </div>    
    </section>
    </form>
</body>


</html>
