<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: loginUser.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
        <div class="container">
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
      
        </div>
        <?php include'toolbarUser.php'; ?>
        <?php include'search.php'; ?>
        
</body>
</html>


<?php } ?>

