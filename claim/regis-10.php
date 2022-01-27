<!DOCTYPE html>
</head>
<html>
    <head>
        <meta charset="utf8">
        <title>คำร้องขอคืนเงินค่าธรรมเนียมการศึกษา</title>
        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            
            body{
                background-color: #339933;
                
                
            }
            h1{
                color: black;
              text-shadow: 2px 2px 5px gray;
              text-transform: uppercase;
              text-decoration: underline;
            }
            h2{
                color: red;
              text-shadow: 2px 2px 5px  black;
              text-decoration: underline;
            }
            label {
                color: #ffffff;
                display : inline-block;
                width: 150px;
                margin-bottom:10px;
            }
        </style>
    </head>
<body  background="BG17.jpg" >
    
            <form action="procdb_form10.php" method="post">
            <div class="container">        
                <img src="logo.png" width="150" height="150" >
                <h1>คำร้องขอคืนเงินค่าธรรมเนียมการศึกษา</h1><br>
                                

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <label class="input-group-text" for="ชื่อ-นามสกุล">ชื่อ-นามสกุล</label> 
                            </div>
                            <input type="text" class="form-control" name="ชื่อ" placeholder="ชื่อ"required=true>
                            <input type="text" class="form-control" name="นามสกุล"  placeholder="นามสกุล"required=true>
                        </div>  
                    
                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <label class="input-group-text" for="รหัสนิสิต">รหัสนิสิต</label> 
                            </div>
                            <input type="text" class="form-control"  id="รหัสนิสิต"  name="รหัสนิสิต" placeholder="รหัสนิสิต"required=true>
                        </div>  
                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <label class="input-group-text" for="ช่องทางการติอต่อ">ช่องทางการติอต่อ</label> 
                            </div>
                            <input type="text" class="form-control" name="เบอร์โทรศัพท์" placeholder="เบอร์โทรศัพท์"required=true>
                            <input type="text" class="form-control" name="email"  placeholder="E-mail"required=true>
                        </div> 
            
                    </div>
                   
            

            <div class="container">
                <div class="form-group">
                    <div class="col-sm-4 control-label ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="การเรียนการสอน">การเรียนการสอน</label>               
                                <select class="custom-select" id="การเรียนการสอน" name="การเรียนการสอน"  required>
                                    <option selected>-เลือกข้อมูล-</option>
                                    <option value="ภาคปกติ">ภาคปกติ</option>
                                    <option value="ภาคพิเศษ">ภาคพิเศษ</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>

             <div class="form-group">
                <div class="col-sm-2 control-label ">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="คณะ">คณะ</label>          
                            <select class="custom-select" id="คณะ" name="คณะ" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="เศรษฐศาสตร์ ศรีราชา">เศรษฐศาสตร์ ศรีราชา</option>
                                <option value="พาณิชยนาวีนานาชาติ">พาณิชยนาวีนานาชาติ</option>
                                <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                                <option value="วิทยาศาสตร์ ศรีราชา">วิทยาศาสตร์ ศรีราชา</option>
                                <option value="คณะวิศวกรรมศาสตร์ศรีราชา">คณะวิศวกรรมศาสตร์ศรีราชา</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="รหัสสาขา">รหัสสาขา</label>
                            <select class="custom-select" id="รหัสสาขา" name="รหัสสาขา" required>
                            <option selected>-เลือกข้อมูล-</option>
                            <option value="G01">G01</option>
                            <option value="G02">G02</option>
                            <option value="M01">M01</option>
                            <option value="M02">M02</option>
                            <option value="M03">M03</option>
                            <option value="M04">M04</option>
                            <option value="M05">M05</option>
                            <option value="T01">T01</option>
                            <option value="R01">R01</option>
                            <option value="R02">R02</option>
                            <option value="R03">R03</option>
                            <option value="R04">R04</option>
                            <option value="R05">R05</option>
                            <option value="R06">R06</option>
                            <option value="R07">R07</option>
                            <option value="R08">R08</option>
                            <option value="R09">R09</option>
                            <option value="R10">R10</option>
                            <option value="R11">R11</option>
                            <option value="R12">R12</option>
                            <option value="R13">R13</option>
                            <option value="R14">R14</option>
                            <option value="R15">R15</option>
                            <option value="R16">R16</option>
                            <option value="R17">R17</option>
                            <option value="S01">S01</option>
                            <option value="S02">S02</option>
                            <option value="S03">S03</option>
                            <option value="S05">S05</option>
                            <option value="S06">S06</option>
                            <option value="S08">S08</option>
                            <option value="S09">S09</option>
                            <option value="S10">S10</option>
                            <option value="S11">S11</option>
                            <option value="T02">T02</option>
                            <option value="T03">T03</option>
                            <option value="T04">T04</option>
                            <option value="T05">T05</option>
                            <option value="T07">T07</option>
                            <option value="T08">T08</option>
                            <option value="T12">T12</option>
                            <option value="T13">T13</option>
                            <option value="T14">T14</option>
                            <option value="T17">T17</option>
                            <option value="T18">T18</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group"> 
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="ชั้นปี">ชั้นปีที่</label>
                            <select class="custom-select" id="ชั้นปี" name="ชั้นปี" required>
                            <option selected>-เลือกข้อมูล-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
          
                
        <div class="container">
                <br><h2>ความประสงค์</h2><br>    
                <input type="checkbox" name="ขอคืนเงินค่าหน่วยกิต" value="ขอคืนเงินค่าหน่วยกิต" checked="checked" /> 
                ขอคืนเงินค่าหน่วยกิต (กรณีสอบได้ระดับคะแนน A ไม่นอ้ยกว่า 15 หน่วยกิต) ในภาค
                    <br>
                    <input type="text" class="form-control" name="ขอคืนเงินค่าหน่วยกิตในภาค" placeholder="">
                    <br>ปีการศึกษา
                    <input type="text" class="form-control" name="ปีการศึกษา" placeholder="">
                    <br>โดยสอบได้ระดับคะแนน “A” จำนวน
                    <input type="text" class="form-control" name="จำนวนA" placeholder="">หน่วยกิต <br>
                    <input type="checkbox" name="ขอคืนค่าลงทะเบียนเรียน"  checked="checked" />
                ขอคืนค่าลงทะเบียนเรียน ในภาค
                <div class="col-sm-2 control-label">
                    
                     <input type="text" class="form-control" name="ภาค" placeholder="ต้น,ปลาย,ฤดูร้อน">
                     
                </div>
            
                <div >
               <h2>เนื่องจาก</h2>
               
                    <div class ="form-group">
                      <textarea class="form-control" rows="5" id="comment" name="จุดประสงค์"></textarea>
                   
                    </div>
               
             

                </div>
             <!--input type="text" class="form-control" placeholder="">
                1.<input type="checkbox" name="choice2" value="ON" checked="checked" />โอนเข้าบัญชรธนาคารชื่อ
                <input type="text" class="form-control" placeholder=""><br>
                <input type="checkbox" name="choice2" value="ON" checked="checked" />ธ.กรุงไทย เลขที่
                <input type="text" class="form-control" placeholder=""><br>
                <input type="checkbox" name="choice2" value="ON" checked="checked" />ธ. ไทยพานิชณ์ เลขที่ 
                <input type="text" class="form-control" placeholder=""><br>
                2.<input type="checkbox" name="choice2" value="ON" checked="checked" />ขอติดต่อรับเช็คจากมหาวิทยาลัยตามที่แจ้งในภายหลัง-->


            <br><h2>ช่องทางการคืนเงิน</h2><br>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="กรุงเทพ" name="ธนาคาร" value="ธ.กรุงเทพ">
                    <label class="custom-control-label" for="กรุงเทพ">ธ.กรุงเทพ</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="ไทยพานิชณ์" name="ธนาคาร" value="ธ.ไทยพานิชณ์">
                    <label class="custom-control-label" for="ไทยพานิชณ์">ธ.ไทยพานิชณ์</label><br>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="เช็ค" name="ธนาคาร" value="รับเช็ค">
                    <label class="custom-control-label" for="เช็ค">ขอติดต่อรับเช็คจากทางมหาวิทยาลัยตามที่แจ้งในภายหลัง</label><br>
                </div><br>
                    <br>

                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                             <label class="input-group-text" for="ข้อมูลการคืนเงิน">ข้อมูลการคืนเงิน</label> 
                            </div>
                            <input type="text" class="form-control" id="ข้อมูลการคืนเงิน"  name="ชื่อบัญชี" placeholder="ชื่อบัญชี"required=true>
                            <input type="text" class="form-control" id="ข้อมูลการคืนเงิน"  name="เลขบัญชี"  placeholder="เลขบัญชี"required=true>
                        </div>  
                    

               
                <br><div class="container">
                    <input type="submit" value = "submit">              
                </div>
                
                

</form> 
                <div class="container">
                    <a href="claim.php">กลับหน้าหลัก</a>
                </div>

</body>
                   

</html>