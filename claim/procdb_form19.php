<?php include 'condb_form19.php';
?>

<?php
   
  

    $firstname = $_POST['ชื่อ'];
    $lastname = $_POST['นามสกุล'];
    $รหัสนิสิต = $_POST['รหัสนิสิต'];
    $เบอร์โทรศัพท์ = $_POST['เบอร์โทรศัพท์'];
    $email = $_POST['email'];
    $การเรียนการสอน = $_POST['การเรียนการสอน'];
    $คณะ = $_POST['คณะ'];
    $รหัสสาขา = $_POST['รหัสสาขา'];
    $ชั้นปี = $_POST['ชั้นปี'];
    $โดยขอรักษาสถานภาพนิสิตใน = $_POST['ภาค'];
    $ปีการศึกษา = $_POST['ปีการศึกษา'];
    $ระบุความประสงค์ = $_POST['ความประสงค์'];

    
   



    mysqli_query ($con_form19, "INSERT INTO  form19(ชื่อ, นามสกุล, รหัสนิสิต, เบอร์โทรศัพท์, email, การเรียนการสอน, คณะ, รหัสสาขา, ชั้นปี,  โดยขอรักษาสถานภาพนิสิตใน, ปีการศึกษา, ความประสงค์,สถานะ)
            VALUES ('$firstname','$lastname','$รหัสนิสิต','$เบอร์โทรศัพท์','$email', '$การเรียนการสอน','$คณะ','$รหัสสาขา','$ชั้นปี',
        '$โดยขอรักษาสถานภาพนิสิตใน','$ปีการศึกษา','$ระบุความประสงค์','รออนุมัติ')");
    
      echo "<script>
      alert('กรอกข้อมูลสำเร็จ');
      window.location.href='claim.php';
      </script>";
   
exit;

?>


