<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



<?php
$query = "SELECT *
FROM form1 

" or die("Error:" . mysqli_error());
$result = mysqli_query($con_form1, $query);
//echo($query_monk);
?>


<div class="form-group">
  <div class="col-sm-5"> </div>
  <div class="col-sm-16" class="center">
    <?php
    echo ' <table id="example1" class="table table-bordered table-striped">';
      echo "<thead>";
        echo "<tr class='info'>
          <th width='2%'>ID_form1</th>
          <th width='2%'>ชื่อ</th>
          <th width='2%'>นามสกุล</th>
          <th width='2%'>รหัสนิสิต</th>
          <th width='2%'>เบอร์โทรศัพท์</th>
          <th width='5%'>email</th>
          <th width='2%'>การเรียนการสอน</th>
          <th width='2%'>คณะ</th>
          <th width='2%'>รหัสสาขา</th>
          <th width='2%'>ชั้นปี</th>
          <th width='2%'>จุดประสงค์</th>
           <th width='2%'>สถานะ</th>

        </tr>";
      echo "</thead>";
      while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["ID_form1"] .  "</td> ";
        echo "<td>" .$row["ชื่อ"] .  "</td> ";
        echo "<td>" .$row["นามสกุล"] .  "</td> ";
        echo "<td>" .$row["รหัสนิสิต"] .  "</td> ";
        echo "<td>" .$row["เบอร์โทรศัพท์"] .  "</td> ";
        echo "<td>" .$row["email"] .  "</td> ";
        echo "<td>" .$row["การเรียนการสอน"] .  "</td> ";
        echo "<td>" .$row["คณะ"] .  "</td> ";
        echo "<td>" .$row["รหัสสาขา"] .  "</td> ";
        echo "<td>" .$row["ชั้นปี"] .  "</td> ";
        echo "<td>" .$row["จุดประสงค์"] .  "</td> ";
      echo "</tr>";
      }
    echo "</table>";
    
    ?>

  </div>
</div>
</div>

</body>
</html>