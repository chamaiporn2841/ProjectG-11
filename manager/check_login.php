<?php 
session_start();
        if(isset($_POST['login'])){
				//connection
                  include("config.php");
				//รับค่า user & password
                  $Username = $_POST['uname'];
                  $Password = md5($_POST['password']);
				//query 
                  $sql="SELECT members.mem_id,members.username,members.password,members.email,members.level,
                        members.date_add, personal.IDpsnl,personal.Edurank,personal.NThai,personal.imgPath,
                        personal.ID_position,personal.Position, position.Type_position 
                        FROM personal
                        INNER JOIN members ON personal.IDpsnl = members.username 
                        INNER JOIN position ON personal.ID_position = position.ID_position
                        Where username='".$Username."' and password='".$Password."' ";

                  
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["username"] = $row["username"];
                      $_SESSION["NThai"] = $row["NThai"];
                      $_SESSION["EduRank"] = $row["Edurank"];
                      $_SESSION["level"] = $row["level"];
                      $_SESSION["Type_position"] = $row["Type_position"];
                      $_SESSION["Position"] = $row["Position"];

                      if($_SESSION["level"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: home.php");

                      }

                      if ($_SESSION["level"]=="emp"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        if($_SESSION["Type_position"]=="สายปฏิบัติการ"||$_SESSION["Type_position"]=="สายลูกจ้างชั่วคราว"){
                          Header("Location:emp/home.php");

                        }else{
                           Header("Location:home.php");
                        }
                       
                      }

                      if ($_SESSION["level"]=="ma"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location:ma/home.php"); //ธารา ประเมินอธิการบดี
                      }
                      
                      if ($_SESSION["level"]=="sma"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location:sma/home.php"); //ธารา ประเมินอธิการบดี
                      }
                      

                      if ($_SESSION["level"]=="pa"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location:home.php");

                      }

                  }else{
                    echo "<script>";
                    echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                    echo "window.location.href = 'index.html'";
                    echo "</script>";

                  }

        }else{


            echo "<script>";
            echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
            echo "window.location.href = 'index.html'";
            echo "</script>";

        }
?>