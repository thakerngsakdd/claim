<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ตรวจสอบสถานะ</title>

    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline" name="searchform" id="searchform">
                        <div class="form-group">
                            <label for="textsearch" ></label>
                            <input type="text" name="Search" id="Search" class="form-control" placeholder="ค้นหารหัสนิสิต!" autocomplete="off"  >
                        </div>
                        <button type="button" class="btn btn-primary" id="btnSearch" onclick="searchdata()">
                            <span class="glyphicon glyphicon-search"></span>
                            ค้นหา
                        </button>


                    </form>
                </div>
            </div>
            <div class="loading"></div>
            <div class="row" id="list-data" style="margin-top: 10px;">

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
