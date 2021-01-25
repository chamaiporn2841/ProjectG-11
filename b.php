<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '12345', 'hr');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM requirement";
    $result = $connect->query($sql);
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสวัสดิการ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>รายละเอียดสวัสดิการ</h1>
            
                <?php while($row = $result->fetch_assoc()): ?>
                    
                    <div><?php echo $row['requirement_type']; ?></div><br>
                    <!-- <div><?php echo $row['requirement_date']; ?></div> -->
                    <div><?php echo $row['requirement_text']; ?></div>

                <?php endwhile ?>
          
    </div>
</body>
</html>