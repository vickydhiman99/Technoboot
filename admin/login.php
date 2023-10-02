<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    

<div id = "login">
        <div class="row m-0 login-box jumbotron">

        <?php
            if(isset($_POST['login'])){

                $user = "admin";
                $pass = "admin@123";

                $username = $_POST['username'];
                $pswrd = $_POST['password'];

                if($username == $user && $pswrd = $pass){
                    header("location:admin.php");
                }else{
                    echo "<script> alert('Wrong Username or ID')</script>";
                };
            };

        ?>


            <form action="" method = "post">
                <h5 class = "text-center">Admin Login</h5>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <input class = "form-control" placeholder = "Enter username" type="text" name = "username">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <input class = "form-control" placeholder = "Enter password" type="password" id="" name = "password">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <button class = "form-control btn btn-success" name = "login" >LOGIN</button>
                </div>
            </form>
        </div>
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>