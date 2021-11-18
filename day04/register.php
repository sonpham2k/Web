<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Register Form</title>
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

        .labelNhap {
            width: 300px;
            background: #ffffff; 
            color: #ff0000;
            border: 1px solid #ffffff;
            text-align: left;
            font-size: 1.1rem;
        }

        .rong1 {
            width: 6px;
            background: #ffffff; 
            color: #ffffff;
            border: 1px solid #ffffff;
        }

        
    
        input {
            border: 1px solid #8fb7e4;
            font-size: 1.3rem;
            font-weight: 100;
            font-family: 'Times New Roman';
            padding: 6px;
            width: 200px;
        }

        .input1 {
            width: 120px;
            height: 39px;
            font-size: 1.3rem;
            background: #87cefa;
            border: 2px solid #8fb7e4;
            /* text-decoration: underline #000000; */
            margin: 20px 0px 20px 0px;

        }

        .input2 {
            border: 1px solid #8fb7e4;
            font-size: 1.3rem;
            font-weight: 100;
            font-family: 'Times New Roman';
            padding: 6px;
            width: 152px;
        }
        form {
            margin: 25px auto;
            padding: 10px;
            border: 2px solid #8fb7e4;
            width: 459px;
        }
        .formAll {
            margin: 25px auto;
            padding: 10px;
            border: 2px solid #8fb7e4;
            width: 459px;
        }
        .css  {
            margin: 20px 0;
        }
        
        .button1 {
            width: 167px;
            padding: 8px;
            font-size: 1rem;
            font-family: 'Times New Roman';
            font-weight: 1;
            background: #ffffff;
            border-radius: 5px;
            border: 1px solid #8fb7e4;
           
        }
        
    </style>
</head>
<body>
         
        <form method="post" action ='register.php'>

        <div>
            <label class="labelNhap" type = "text" >
            <?php
        error_reporting(0);
        
        if (isset($_POST["btn_DangKi"])) {
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $phankhoa = $_POST['phankhoa'];
            $namsinh = $_POST['namsinh'];
       
            $hoten = strip_tags($hoten);
		    $hoten = addslashes($hoten);
        
            $gioitinh = strip_tags($gioitinh);
		    $gioitinh = addslashes($gioitinh);
        
            $phankhoa = strip_tags($phankhoa);
		    $phankhoa = addslashes($phankhoa);

            if($hoten == '')
            {
                echo "Hãy nhập tên. <br>";
            }
            if($gioitinh == '')
            {
                echo "Hãy chọn giới tính. <br>";     
            }
            if($phankhoa == '')
            {
                echo "Hãy chọn phân khoa. <br>";       
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
                $sName = array("Nữ","Nam");
                $sValue = array("1","0");
                for ($i = 0; $i <  count($sName); $i++)  {
                    echo '<input style="width: 36px" id="Sex" name="gioitinh" type="radio" value="'.$sName[$i].'">'.$sName[$i];
                    echo '<label class="rong1"></label>';
                }
                
                ?>
        </div>
        <div class="css">
            <label class="text">Phân Khoa</label>
            <select class="button1" name="phankhoa">
                
                <?php
                $kName = array("","Khoa học máy tính","Khoa học vật liệu");
                $kValue = array("","MAT","KDL");
                foreach ($kName as $k1) {
                    echo '<option>'.$k1.'</option>';
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