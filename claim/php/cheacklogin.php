<?php
require_once('condb.php');

$username = $_POST['user_login'];
$password = $_POST['pwd_login'];

if (isset($_POST['submitlogin'])) {
    // echo '<pre>', print_r($_POST), '</pre>';

    // echo $username;
    //echo $password;

    $username = $_POST['user_login'];
    $password = $_POST['pwd_login'];

    $stmt = $conn->prepare("SELECT * FROM claim WHERE UserName = ? ");
    $stmt->bind_param('s', $username); // s - string  i- int b - bol 
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    echo '<pre>', print_r($row), '</pre>';
    if (!empty($row)) {
        if ($password == $row['UserPassword']) {
            
            $_SESSION['id'] = $row['id']; // ต้องมี session_start(); ก่อน ****
            $_SESSION['UserName'] = $row['UserName'];       
            echo "<script> alert('login สำเร็จ'); </script>";
            
            header('location:../claim.php');
        } else {
            //echo 'ล้มเหลว';
            echo "<script> alert('รหัสผ่านผิด'); </script>";

            //header('Refresh:0; url=../index.php');
        }
    } else {
        echo "<script> alert('ไม่พบ Username นี้ในระบบ'); </script>" ;
        
        //header('Refresh:0; url=../claim.php');
        //header('location:../index.php');
    }


    /*
http://www.passwordtool.hu/php5-password-hash-generator
    $hash = '$2y$10$TujmMEDjYGMi8Fckyo/zDOg1s16DL9OcJw4t5V0QkWZ36gVAnZXSO';  // ่ รหัสจากด้าต้าเบส

    if (password_verify('peawpeaw', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
*/
} else {
    echo ('ล้มเหลว');
    //header('location:../index.php');
}