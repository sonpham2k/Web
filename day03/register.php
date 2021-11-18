<!DOCTYPE html>
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
            background: #ff8c00;
            border: 2px solid #8fb7e4;
            text-decoration: underline #000000;
            margin: 20px 0px 20px 0px;

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
  
    
    <form method="post" action="register" name="Đăng ký">
        <div><label class="rong1"></label></div>
        <div class="css">
            <label class="text">Họ và tên</label>
            <input class="input" type="text" name="HoVaTen">
        </div>
        <div class="css">
            <label class="text">Giới tính</label>
                <?php
                $sName = array("Nữ","Nam");
                $sValue = array("1","0");
                for ($i = 0; $i <  count($sName); $i++)  {
                    echo '<input style="width: 36px" id="Sex" name="optionsRadio" type="radio" value="'.$sValue[$i].'">'.$sName[$i];
                    echo '<label class="rong1"></label>';
                }
                
                ?>
        </div>
        <div class="css">
            <label class="text">Phân Khoa</label>
            <select class="button1" name="khoa">
                <option> </option>
                <?php
                $kName = array("Khoa học máy tính","Khoa học vật liệu");
                $kValue = array("MAT","KDL");
                foreach ($kValue as $k1) {
                    if($k1 == "MAT"){
                        echo '<option value='.$k1.'>Khoa học máy tính</option>';
                    } else {
                        echo '<option value='.$k1.'>Khoa học vật liệu</option>';
                    }
                }           
                ?>
            
            </select>
            <label class="rong1"></label>
        </div>
        
        <input type="submit" value="Đăng ký" class="input1">
        
    </form> 
  
</body>
</html>