<!DOCTYPE html>
<?php 
    session_start();
    include('connect.php');
    if($_SESSION["login"] != true){
        header("location:admin.php");
    }
?>
?>
<html>
<head>
    <title>Do Register Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_register.css" />
</head>
<body>
   

    <form action="register">    
        <?php
             $sql = "select * from student";
             $query=$conn->prepare($sql);
             $query->execute();
             $result=$query->fetchAll(PDO::FETCH_OBJ);
        ?>
        <div class="css">
            <?php
            if($query->rowCount()>0) 
            {
                for ($i = count($result)-1; $i <  count($result); $i++)  {
                    echo 'Bạn vừa đăng kí xong sinh viên có mã sv là:'.$result[$i]->id;
                }
            } 
            ?>
        </div>
        <div class="css">
            <label class="text">Họ và tên</label>
            <label class="labelOut" type="text" name="HoVaTen1">
            <?php
               if($query->rowCount()>0) 
               {
                   for ($i = count($result)-1; $i <  count($result); $i++)  {
                       echo $result[$i]->name;
                   }
               } 
                ?>
            </label>
        </div>
        <div class="css">
            <label class="text">Giới tính</label>
            <label class="labelOut" type="text" name="GioiTinh">
                <?php 
                    if($query->rowCount()>0) 
                    {
                        for ($i = count($result)-1; $i <  count($result); $i++)  {
                            if($result[$i]->gender == '0'){
                                echo 'Nữ';
                            } 
                            else 
                            {
                                echo 'Nam';
                            }
                        }
                    } 
                ?>
            </label>
        </div>
        <div class="css">
            <label class="text">Phân Khoa</label>
            <label class="labelOut" type="text" name="phan_khoa">
                <?php 
                    if($query->rowCount()>0) 
                    {
                        for ($i = count($result)-1; $i <  count($result); $i++)  {
                            echo $result[$i]->faculty;
                        }
                    } 
                ?>
               
            </label>
        </div>
        
        <div class="css">
            <label class="text">Tuổi</label>
            <label class="labelOut" type="text" name="namsinh">
                <?php 
                   if($query->rowCount()>0) 
                   {
                       for ($i = count($result)-1; $i <  count($result); $i++)  {
                           echo $result[$i]->birthday_year;
                       }
                   } 
                ?>
            </label>    
        </div>

    </form>
    
    
    
</body>
</html>