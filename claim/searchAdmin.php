<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ตรวจสอบสถานะ</title>

    </head>
    <body>
        
        <br><div class="container">
           <div class="form-group">
                    <div class="col-sm-2 control-label ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="check">ตรวจสอบสถานะ</label>          
                               <select name="check" id="check" onchange="location = this.value">
                                    <option selected>-เลือกคำร้องที่ต้องการค้นหา-</option>
                                    <option value="chancellor1.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 1 </a></option>
                                    <option value="chancellor3.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 3 </a></option>
                                    <option value="chancellor4.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 4 </a></option>
                                    <option value="chancellor5.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 5 </a></option>
                                    <option value="chancellor6.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 6 </a></option>
                                    <option value="chancellor7.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 7 </a></option>
                                    <option value="chancellor8.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 8 </a></option>
                                    <option value="chancellor9.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 9 </a></option>
                                    <option value="chancellor10.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 10 </a></option>
                                    <option value="chancellor11.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 11 </a></option>
                                    <option value="chancellor12.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 12 </a></option>
                                    <option value="chancellor13.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 13 </a></option>
                                    <option value="chancellor14.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 14 </a></option>
                                    <option value="chancellor15.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 15 </a></option>
                                    <option value="chancellor16.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 16 </a></option>
                                    <option value="chancellor17.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 17 </a></option>
                                    <option value="chancellor18.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 18 </a></option>
                                    <option value="chancellor19.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 19 </a></option>
                                    <option value="chancellor20.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 20 </a></option>
                                    <option value="chancellor3.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 3 </a></option>
                                    <option value="chancellor4.php"><a class="py-2 d-none d-md-inline-block">ตรวจสอบสถานะ register 4 </a></option>
                                </select>
                   
                            </div>
                        </div>
                    </div>
                </div>

               

        </div>
            
        <script >console.log(window.location.href+"/") 
                
                function searchdata(){                   
                var url= new URL(window.location.href)
                url.searchParams.set("Search",document.getElementById('Search').value)
                window.location.href=url.href;
                }
                document.getElementById('Search').value = (window.location.search.split("=")[1] != undefined ? window.location.search.split("=")[1]:"")


        </script>

    </body>
</html>
