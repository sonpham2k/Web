<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head>
    <title>Do Register Form</title>
    <meta charset="utf-8">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }
        label {
            border: 1px solid #8fb7e4;
            width: 120px;
            display: inline-block;
            text-align: center;
            font-size: 1.1rem;
            font-family: 'Times New Roman';
            background: #87cefa;
            margin-right: 20px;
            padding: 9px;
        }

        .labelOut {
            border: 1px solid #ffffff;
            width: 200px;
            display: inline-block;
            text-align: left;
            font-size: 1.1rem;
            font-family: 'Times New Roman';
            background: #ffffff;
            margin-right: 20px;
            padding: 9px;
        }


        form {
            margin: 25px auto;
            padding: 10px;
            border: 2px solid #8fb7e4;
            width: 459px;
        }
        .css  {
            margin: 20px 0;
        }
        
    </style>
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