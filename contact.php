<?php
include 'components/header.php';
?>

<?php
    $con = mysqli_connect("localhost","root","","technoboot");

    if(isset($_POST["submit"])){

        $f_name = $_POST["fname"];
        $l_name = $_POST["lname"];
        $mail = $_POST["email"];
        $phn = $_POST["phone"];
        $msg = $_POST["msg"];

        $query = "INSERT INTO `user_data`(`f_name`, `l_name`, `email`, `phone`, `message`) VALUES ('$f_name','$l_name','$mail','$phn','$msg')";

        if($f_name != "" && $l_name != "" && $mail != "" && $phn != "" && $msg != "" ){
            mysqli_query($con,$query);
        }else{
            echo "<script>alert('please fill all required fields.');</script>";
        };       
    };
?>

<div class="outlet" >
    <div class="products-banner">
    <h1>Contact Our Sales Team</h1>
    <p>Be Sure We Are Online.</p>
    </div>
    <section class="mt-3">
        <div class="container">
            <div class="jumbotron">
                <form action="" method = "post">
                    <div class="row m-0">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control contact-input" placeholder = "First Name" name="fname">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                                <input type="text" class="form-control contact-input" placeholder = "Last Name" name="lname">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                                <input type="email" class="form-control contact-input" placeholder = "Email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                                <input type="tel" class="form-control contact-input" placeholder = "Phone" name="phone">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea class="form-control text-area" id=""  rows="10" name = "msg">Give Us more details.....</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-dark text-light py-3" style= "width:100%;" name = "submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php

include 'components/footer.php';
 ?>
</div>