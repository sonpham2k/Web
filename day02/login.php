<html>
<head>
<title>Login form</title>
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

/* Khung label bao quanh tên đăng nhập và mật khẩu */
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.1rem;
    font-family: 'Arial';
    background: #4c9ce0;
    margin-right: 20px;
    padding: 16px 25px 15px 10px
}

/* Khung nhập thông tin */
input {
    border: 2px solid #8fb7e4;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Arial';
    padding: 10px;
    width: 220px;
}

/* Khung xanh */
form {
    margin: 25px auto;
    padding: 20px;
    border: 2px solid #8fb7e4;
    width: 600px;
}

/* thẻ */
div  {
    margin: 20px;
}

/* Nút đăng nhập */
.btn {
    padding: 5px 20px 25px 20px;
    font-size: 1.1rem;
    font-family: 'Arial';
    font-weight: 0;
    background: #4c9ce0;
    border-radius: 8px;
    margin-top: 20px;
}

/* Khung giờ */
p {
    font-size: 1.1rem;
    text-align: left;
    margin-right: 20px;
    margin-left: 85px;
    padding: 16px 25px 15px 10px;
    width: 395px;
    background: #e8e8e8;
}
    </style>
</head>
<body>
<?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('H:i d/m/Y');
    echo '<form method="post" action="" name="signin-form">
        <p>Bây giờ là: '.$date.'</p>
        <div>
            <label class="text">Tên đăng nhập</label>
            <input type="text" name="username">
        </div>
        <div>
            <label class="text">Mật khẩu</label>
            <input type="password" name="password" required="">
        </div>
        <div>
            <input type="submit" value="Đăng nhập" class="btn">
        </div>       
    </form>';
?>
</body>
</html>
