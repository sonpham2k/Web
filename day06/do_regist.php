<!DOCTYPE html>
<?php 
    session_start();
    include('connect.php');

    if(isset($_POST['insert']))
    {
        error_reporting(0);

        $hoten = $_SESSION["hoten"];

        if($_SESSION["gioitinh"] == "Nữ"){
            $gioitinh = '0';
        } else {
            $gioitinh = '1';
        }

        $phankhoa = $_SESSION["phankhoa"];
        
        $now = getdate();
        $year = $now["year"]; 

        if($_SESSION["namsinh"] == null){
            $namsinh = '';
        } else {
            $namsinh = $year - $_SESSION["namsinh"];
        }

        $sql="insert into student(name,gender,faculty,birthday_year) value( :hten,:gtinh,:pkhoa,:nsinh)";
        $query=$conn->prepare($sql);
        $query->bindParam(':hten',$hoten, PDO::PARAM_STR);
        $query->bindParam(':gtinh',$gioitinh, PDO::PARAM_INT);
        $query->bindParam(':pkhoa',$phankhoa, PDO::PARAM_STR);
        $query->bindParam(':nsinh',$namsinh, PDO::PARAM_STR);
        
        $query->execute();
        
        header('Location: complete_regist.php');
    }
?>
<html>
<head>
    <title>Do Register Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_register.css" />
</head>
<body>
   
    
    <form method="post">    
    
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
                    if(isset($_SESSION["gioitinh"]))
                        echo $_SESSION["gioitinh"];
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
            <label class="labelOut" type="text" name="nam_sinh">
                <?php 
                    $now = getdate();
                    $year = $now["year"];   
                    
                    if($_SESSION["namsinh"] != null){
                        echo  $year - $_SESSION["namsinh"];
                    } else {
                        echo $_SESSION["namsinh"];
                    }
                    
                ?>
            </label>    
        </div>

        <input type="submit" name="insert" value="Đăng ký" class="input1">
      
    </form>
    
    
    
</body>
</html>