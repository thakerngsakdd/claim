<?php
print_r($_GET);

require_once('condb.php');
/*อัพเดทฟอร์ม1*/
if (isset($_GET['ID_form1'])) {
	//* [ID_form1]

	echo $_GET['ID_form1'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form1` SET `สถานะ` = 'อนุมัติ' WHERE `form1`.`ID_form1` = '".$_GET['ID_form1']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม3*/
if (isset($_GET['ID_form3'])) {
	//* [ID_form1]

	echo $_GET['ID_form3'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form3` SET `สถานะ` = 'อนุมัติ' WHERE `form3`.`ID_form3` = '".$_GET['ID_form3']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม4*/
if (isset($_GET['ID_form4'])) {
	//* [ID_form1]

	echo $_GET['ID_form4'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form4` SET `สถานะ` = 'อนุมัติ' WHERE `form4`.`ID_form4` = '".$_GET['ID_form4']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม5*/
if (isset($_GET['ID_form5'])) {
	//* [ID_form1]

	echo $_GET['ID_form5'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form5` SET `สถานะ` = 'อนุมัติ' WHERE `form5`.`ID_form5` = '".$_GET['ID_form5']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม6*/
if (isset($_GET['ID_form6'])) {
	//* [ID_form1]

	echo $_GET['ID_form6'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form6` SET `สถานะ` = 'อนุมัติ' WHERE `form6`.`ID_form6` = '".$_GET['ID_form6']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม7*/
if (isset($_GET['ID_form7'])) {
	//* [ID_form1]

	echo $_GET['ID_form7'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form7` SET `สถานะ` = 'อนุมัติ' WHERE `form7`.`ID_form7` = '".$_GET['ID_form7']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม8*/
if (isset($_GET['ID_form8'])) {
	//* [ID_form1]

	echo $_GET['ID_form8'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form8` SET `สถานะ` = 'อนุมัติ' WHERE `form8`.`ID_form8` = '".$_GET['ID_form8']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม9*/
if (isset($_GET['ID_form9'])) {
	//* [ID_form1]

	echo $_GET['ID_form9'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form9` SET `สถานะ` = 'อนุมัติ' WHERE `form9`.`ID_form9` = '".$_GET['ID_form9']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม10*/
if (isset($_GET['ID_form10'])) {
	//* [ID_form1]

	echo $_GET['ID_form10'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form10` SET `สถานะ` = 'อนุมัติ' WHERE `form10`.`ID_form10` = '".$_GET['ID_form10']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม11*/
if (isset($_GET['ID_form11'])) {
	//* [ID_form1]

	echo $_GET['ID_form11'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form11` SET `สถานะ` = 'อนุมัติ' WHERE `form11`.`ID_form11` = '".$_GET['ID_form11']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม12*/
if (isset($_GET['ID_form12'])) {
	//* [ID_form1]

	echo $_GET['ID_form12'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form12` SET `สถานะ` = 'อนุมัติ' WHERE `form12`.`ID_form12` = '".$_GET['ID_form12']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม13*/
if (isset($_GET['ID_form13'])) {
	//* [ID_form1]

	echo $_GET['ID_form13'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form13` SET `สถานะ` = 'อนุมัติ' WHERE `form13`.`ID_form13` = '".$_GET['ID_form13']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม14*/
if (isset($_GET['ID_form14'])) {
	//* [ID_form1]

	echo $_GET['ID_form14'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form14` SET `สถานะ` = 'อนุมัติ' WHERE `form14`.`ID_form14` = '".$_GET['ID_form14']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม15*/
if (isset($_GET['ID_form15'])) {
	//* [ID_form1]

	echo $_GET['ID_form15'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form15` SET `สถานะ` = 'อนุมัติ' WHERE `form15`.`ID_form15` = '".$_GET['ID_form15']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม16*/
if (isset($_GET['ID_form16'])) {
	//* [ID_form1]

	echo $_GET['ID_form16'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form16` SET `สถานะ` = 'อนุมัติ' WHERE `form16`.`ID_form16` = '".$_GET['ID_form16']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม17*/
if (isset($_GET['ID_form17'])) {
	//* [ID_form1]

	echo $_GET['ID_form17'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form17` SET `สถานะ` = 'อนุมัติ' WHERE `form17`.`ID_form17` = '".$_GET['ID_form17']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม18*/
if (isset($_GET['ID_form18'])) {
	//* [ID_form1]

	echo $_GET['ID_form18'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form18` SET `สถานะ` = 'อนุมัติ' WHERE `form18`.`ID_form18` = '".$_GET['ID_form18']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม19*/
if (isset($_GET['ID_form19'])) {
	//* [ID_form1]

	echo $_GET['ID_form19'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form19` SET `สถานะ` = 'อนุมัติ' WHERE `form19`.`ID_form19` = '".$_GET['ID_form19']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}

/*อัพเดทฟอร์ม20*/
if (isset($_GET['ID_form20'])) {
	//* [ID_form1]

	echo $_GET['ID_form20'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "UPDATE `form20` SET `สถานะ` = 'อนุมัติ' WHERE `form20`.`ID_form20` = '".$_GET['ID_form20']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    

    header('location:../admin_page.php');
	# code...
}




?>