<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
//session_start();
//echo "<pre>";
//print_r($_SESSION);
//echo "<pre>";

?>

<body>

    <script type="text/javascript">
    console.log(window.location.href + "/")

    console.log("search " + window.location.search.split("=")[1])
    var search = window.location.search.split("=")[1]
    </script>



    <?php

    $con_form1 =  mysqli_connect("localhost", "root", "", "form");
    mysqli_set_charset($con_form1, "utf8");

    if (mysqli_connect_error($con_form1)) {
        echo "Failed";
    }

    ?>

    <?php

    $search = (isset($_GET['Search']) ? $_GET['Search'] : null);

    $query =  ($search ? " SELECT * FROM `form1` WHERE `รหัสนิสิต` LIKE '$search' " : " SELECT * FROM `form1`")
        or die("Error:" . mysqli_error());

    $result = mysqli_query($con_form1, $query);


    ?>

    <div class="form-group">
        <div class="col-sm-5"> </div>
        <div class="col-sm-16" class="center">
            <?php
            echo ' <table id="example1" class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr class='info'>
         <th width='10%'>Regis-1</th>
          <th width='10%'>ชื่อ</th>
          <th width='10%'>นามสกุล</th>
          <th width='10%'>รหัสนิสิต</th>         
          <th width='10%'>การเรียนการสอน</th>
          <th width='10%'>คณะ</th>
          <th width='10%'>รหัสสาขา</th>         
          <th width='10%'>ชั้นปี</th>
          <th width='10%'>สถานะ</th>

        </tr>";
            echo "</thead>";/*
      while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["ID_form1"] .  "</td> ";
        echo "<td>" .$row["ชื่อ"] .  "</td> ";
        echo "<td>" .$row["นามสกุล"] .  "</td> ";
        echo "<td>" .$row["รหัสนิสิต"] .  "</td> ";        
        echo "<td>" .$row["การเรียนการสอน"] .  "</td> ";
        echo "<td>" .$row["คณะ"] .  "</td> ";
        echo "<td>" .$row["รหัสสาขา"] .  "</td> ";
        echo "<td>" .$row["ชั้นปี"] .  "</td> ";        
        echo "<td>" .$row["สถานะ"] .  "</td> ";
        echo "<td><a href="php/update.php?ID_form1='" . $row["ID_form1"] . "'"</td>";
        
      echo "</tr>";
      }
    echo "</table>";
    */
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["ID_form1"]; ?></td>
                <td><?php echo $row["ชื่อ"]; ?></td>
                <td><?php echo $row["นามสกุล"]; ?></td>
                <td><?php echo $row["รหัสนิสิต"]; ?></td>
                <td><?php echo $row["การเรียนการสอน"]; ?></td>
                <td><?php echo $row["คณะ"]; ?></td>
                <td><?php echo $row["รหัสสาขา"]; ?></td>
                <td><?php echo $row["ชั้นปี"]; ?></td>
                <td><?php echo $row["สถานะ"]; ?></td>
                <?php
                    if (isset($_SESSION)) {
                        # code...

                        if ($_SESSION['userlevel'] == 'a') {
                            # code...
                            if ($row["สถานะ"] != 'อนุมัติ') {

                    ?>


                <td> <a href="php/update.php?ID_form1=<?php echo $row["ID_form1"]; ?>"
                        class="btn btn-success btn-sm col float-right">
                        อนุมัติ
                    </a>
                </td>
                <?php
                            }else{
                             echo " <td> </td>";
                            }
                        }
                    }    ?>


            </tr>
            <?php }  ?>
            </table>
        </div>
    </div>
    </div>

</body>

</html>