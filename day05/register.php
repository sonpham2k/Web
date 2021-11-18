<!DOCTYPE html>
<?php
session_start();
include('connect.php');
?>
<html>
<head>
    <title>Register Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_register.css" />
</head>
<body>
         
        <form method="post">
        
        <div>
            <label class="labelNhap" type = "text" >
            <?php
        error_reporting(0);
        
        if (isset($_POST["btn_DangKi"])) {
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $phankhoa = $_POST['phankhoa'];
            $namsinh = $_POST['namsinh'];
       
            // $hoten = strip_tags($hoten);
		    //  $hoten = addslashes($hoten);
        
            // $gioitinh = strip_tags($gioitinh);
		    //  $gioitinh = addslashes($gioitinh);
        
            // $phankhoa = strip_tags($phankhoa);
		    //  $phankhoa = addslashes($phankhoa);

            if($hoten == '')
            {
                echo "Hãy nhập tên . <br>";
            }
            if($gioitinh == '')
            {
                echo "Hãy chọn giới tính . <br>";     
            }
            if($phankhoa == '')
            {
                echo "Hãy chọn phân khoa . <br>";       
            }
            if($hoten != '' && $gioitinh != '' && $phankhoa != '')
            {
                $_SESSION['hoten'] = $hoten;
                $_SESSION['gioitinh'] = $gioitinh;
                $_SESSION['phankhoa'] = $phankhoa;
                $_SESSION['namsinh'] = $namsinh;
                header('Location: do_regist.php');
                
            }
    }
    ?>
            </label>     
        </div>
       
        <div class="css">
            <label class="text">Họ và tên</label>
            <input class="input" type="text" name="hoten">
        </div>
        <div class="css">
            <label class="text">Giới tính</label>
                <?php
                $sql = "select * from gender";
                $query=$conn->prepare($sql);
                $query->execute();
                $result=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount()>0) 
                {
                    foreach ($result as $row1) 
                    {
                        echo '<input style="width: 36px" id="Sex" name="gioitinh" type="radio" value="'.$row1->name.'">'.$row1->name;
                        echo '<label class="rong1"></label>';
                    }
                }
                ?>
        </div>
        <div class="css">
            <label class="text">Phân Khoa</label>
            <select class="button1" name="phankhoa">
                <option> </option>
                <?php
                $sql = "select * from faculty";
                $query=$conn->prepare($sql);
                $query->execute();
                $result=$query->fetchAll(PDO::FETCH_OBJ);
                
                if($query->rowCount()>0) 
                {
                    
                    foreach ($result as $row2) 
                    {
                        // echo '<option>' '</option>'; 
                        echo '<option>'.$row2->name.'</option>'; 
                    }
                }         
                ?>
            
            </select>
            <label class="rong1"></label>
        </div>
        
        <div>
            <label class="text">Năm sinh</label>
            <input class="input2" type="text" name="namsinh">
            <label class="rong1"></label>
        </div>

        <input type="submit" name="btn_DangKi" value="Đăng ký" class="input1"> 
        
        </form> 
           
  
</body>
</html>