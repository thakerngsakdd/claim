<?php 

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">

    <style>
            input[type=text], select {
              width: 20%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }
            input[type=password], select {
              width: 20%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=submit] {
              width: 15%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            div {
              border-radius: 5px;
             
              padding: 20px;
            }

            button{
                background-color: #45a049;
                width: 15%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;

            }
            </style>

</head>
<body background="BG12.jpg">

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

    <div>
    <form action="login.php" method="post">
        <h1>เข้าสู่ระบบ</h1><br>
        <label for="username">ชื่อผู้ใช้</label>
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <br><label for="password">รหัสผ่าน</label>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <br><input type="submit" name="submit" value="Login"> 
    </form>
        <br><a href="register.php"><button>ลงทะเบียน</button></a><br>
        <br><a href="claim.php"><button>กลับหน้าหลัก</button></a><br>
    </div>
    
    
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>