<?php include 'condb_form12.php';
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
    $ขอย้ายเข้าสาขา = $_POST['ขอย้ายเข้าสาขา'];
    $ตั้งแต่ภาค = $_POST['ภาค'];
    $ปีการศึกษา = $_POST['ปีการศึกษา'];
  	$เนื่องจาก = $_POST['เนื่องจาก'];

  	mysqli_query ($con_form12, "INSERT INTO  form12(ชื่อ, นามสกุล, รหัสนิสิต, เบอร์โทรศัพท์, email, การเรียนการสอน, คณะ,รหัสสาขา, ชั้นปี,  ขอย้ายเข้าสาขา,  ตั้งแต่ภาค,  ปีการศึกษา,  เนื่องจาก, สถานะ)
  							 VALUES ('$firstname','$lastname','$รหัสนิสิต','$เบอร์โทรศัพท์' ,'$email', '$การเรียนการสอน','$คณะ','$รหัสสาขา','$ชั้นปี',
                 '$ขอย้ายเข้าสาขา','$ตั้งแต่ภาค','$ปีการศึกษา','$เนื่องจาก','รออนุมัติ')");

    echo "<script>
      alert('กรอกข้อมูลสำเร็จ');
      window.location.href='claim.php';
      </script>";
   
exit;

?>