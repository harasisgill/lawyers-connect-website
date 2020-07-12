<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">
    <script src="Bootstrap/JS/jquery-1.9.1.js"></script>
    <script src="Bootstrap/JS/bootstrap.js"></script>
    <script type="text/javascript">
        
        $(document).ajaxStart(function(){
                $("#waitt").show();
            });
            
            $(document).ajaxStop(function(){
                $("#waitt").hide();
            });

        
        
        
        $(document).ready(function() {
                    $("#btnl").click(function() {
                        $a = $("#frm").serialize();
                        $url = "chk-id.php?" + $a;
                        $.get($url,function(response) {
                            $("#inv").html(response);
                            if(response=="Hurrahhhhhh")
                                {
                                    location="lawyer-profile.php";
                                }
                            
                });



                    });


                    });
    </script>

    <title>Login</title>
      <style>
          #inv
          {
              color: red;
          }
          #waitt
          {
              margin-left: 170px;
            width:10px;
              float:none;
              height: 10px;
              display: none;
          }
      </style>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form method="get" id="frm">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User id</label><span class="text-danger" id="res">*</span><div id="waitt"><img src="Pictures/loading.gif"></div>
                            <input type="text" class="form-control" id="luid" name="luid" placeholder="User id" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label><span class="text-danger" id="res">*</span>
                            <input type="text" class="form-control" id="lpwd" name="lpwd" placeholder="Password" required>
                        </div> <div id="inv" name="inv"></div>
                        <center><span id="result" class="text-primary"></span></center>

                        <div class="modal-footer bg-dark">
                            <center>
                                <button type="button" class="btn bg-white" name="btnl" id="btnl">Login</button>
                                <button type="button" class="btn bg-secondary" name="btn" value="forgot">Forgot Password</button>
                            </center>
                        </div>
                        <div id="inv" name="inv"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>