<!DOCTYPE html>
<?php
    session_start();
    include('connect.php');
   
?>
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_register.css" />
</head>
<body>
         
        <form method="post">
        
        <div>
            <label class="labelNhap" type = "text" >

                <?php
                     if (isset($_POST["login"])) {
                        $user = $_POST["user"];
                        $pass = md5($_POST["pass"]);
                        
                        $sql = "SELECT * FROM `admin` WHERE user='$user' AND password='$pass'";
                        $query=$conn->prepare($sql);
                        $query->execute();
                        $result=$query->fetchAll(PDO::FETCH_OBJ);
                    
                        if($_POST["pass"] == '' || $user == '' ){
                            echo "Hãy nhập tên đăng nhập";
                        }
                    
                        if($user != '' && $_POST["pass"] != ''){
                            if(count($result)){
                                $_SESSION["login"] = $result;
                                header("location: home.php");
                            } else {
                                echo "Tài khoản hoặc mật khẩu sai, mời nhập lại!";
                            }
                        }
                    }
                ?>
            </label>     
        </div>
       
        <div class="css">
            <label class="text">Tên đăng nhập</label>
            <input class="input" type="text" name="user">
        </div>
        
        <div class="css">
            <label class="text">Mật khẩu</label>
            <input class="input" type="password" name="pass">
        </div>

        <input type="submit" name="login" value="Login" class="input1"> 
        
        </form> 
           
  
</body>
</html>