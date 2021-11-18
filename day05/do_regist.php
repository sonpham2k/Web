<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head>
    <title>Do Register Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_do_regist.css" />
</head>
<body>
   

    <form action="register">    
        <div class="css">
            <label class="text">Họ và tên</label>
            <label class="labelOut" type="text" name="HoVaTen1">
                <?php 
                    echo $_SESSION["hoten"];
                    
                    ?>
            </label>
        </div>
        <div class="css">
            <label class="text">Giới tính</label>
            <label class="labelOut" type="text" name="GioiTinh">
                <?php 
                    if(isset($_SESSION["gioitinh"])){
                        echo $_SESSION["gioitinh"];  
                    }
                ?>
            </label>
        </div>
        <div class="css">
            <label class="text">Phân Khoa</label>
            <label class="labelOut" type="text" name="phan_khoa">
                <?php 
                        echo $_SESSION["phankhoa"]; 
                ?>
               
            </label>
        </div>
        
        <div class="css">
            <label class="text">Tuổi</label>
            <label class="labelOut" type="text" name="namsinh">
                <?php 
                    $now = getdate();
                    $year = $now["year"];   
                    if(isset($_SESSION["namsinh"])){
                        echo $year - $_SESSION["namsinh"];
                    }
                ?>
            </label>    
        </div>
    
    </form>
    
    
    
</body>
</html>