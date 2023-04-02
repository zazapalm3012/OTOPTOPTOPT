<?php
include_once ("connectDB.php");
include_once("navbar_index.php");
$conn = new DB_conn;


?>
<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
  AOS.init();
</script>

  </head>

<body>
<div>
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="addMember" id="addMember" novalidate="novalidate" action = "member.php" method = "POST">
                    <h2 style="text-align: center;">Sign up</h2>    
                    <div class="control-group">
                            <input type="text" class="form-control" id="fname" name = "fname" placeholder="กรุณากรอกชื่อ"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            <input type="text" class="form-control" id="lname" name = "lname" placeholder="กรุณากรอกนามสกุล"
                                required="required" data-validation-required-message="Please enter your lastname" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            <input type="text" class="form-control" id="mname" name = "mname" placeholder="กรุณากรอกชื่อกลาง"
                                 data-validation-required-message="Please enter your middlename" />
                            <p class="help-block text-danger"></p>
                        </div>
                       
                        <div class="control-group">
                            <input type="email" class="form-control"id="email" name = "email" placeholder="Your Email"
                                required="required"
                                data-validation-required-message="Please enter your email"></input>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            <input type="text" class="form-control" id="username" name = "username" placeholder="Your Username"
                                required="required" data-validation-required-message="Please enter your Username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            <input type="password" class="form-control" id="password" name = "password" placeholder="Your password"
                                required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class ="control-group " >
                            <p style="color:white;">กรุณาเลือกประเภทสมาชิก</p>
                            <input type="radio" id="monthly" name="rdType" value="รายเดือน">
                            <label for="monthly" style="color:white;">รายเดือน</label><br>
                            <input type="radio" id="yearly" name="rdType" value="รายปี">
                            <label for="yearly" style="color:white;">รายปี</label><br>
                        </div>
                        <div align="center">
                            <button class="btn btn-primary py-2 px-4 " type="submit" name ="sendButton" id="sendButton"  >สมัครสมาชิก</button>
                        </div>
                    </form>
                </div>
            </div>
</div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" ></script>

