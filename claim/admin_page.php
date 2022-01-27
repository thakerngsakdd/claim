<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: loginuser.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">

    <style >
        h1 {
               color: black;
              text-shadow: 3px 3px 8px gray;
              text-align: left;
              text-transform: uppercase;
    </style>

</head>
<body >
        
        
        <br><?php include'toolbaradmin.php'; ?>
        

        
        <br><?php include'condb_form1.php'; ?>
        <?php include'condb_form3.php'; ?>   
        <?php include'condb_form4.php'; ?>
        <?php include'condb_form5.php'; ?>
        <?php include'condb_form6.php'; ?>    
        <?php include'condb_form7.php'; ?>
        <?php include'condb_form8.php'; ?>
        <?php include'condb_form9.php'; ?>   
        <?php include'condb_form10.php'; ?>
        <?php include'condb_form11.php'; ?>
        <?php include'condb_form12.php'; ?>    
        <?php include'condb_form13.php'; ?>  
        <?php include'condb_form14.php'; ?>
        <?php include'condb_form15.php'; ?>   
        <?php include'condb_form16.php'; ?>
        <?php include'condb_form17.php'; ?>
        <?php include'condb_form18.php'; ?>    
        <?php include'condb_form19.php'; ?>
        <?php include'condb_form20.php'; ?>  
        
</body>
</html>


<?php } ?>
