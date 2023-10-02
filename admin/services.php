<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Services</title>
    <link rel="stylesheet" href="assets/css/product.css">

</head>

<body>

<?php include 'component/sidebar.php'; ?>
    <div class="box">
        <h1>Service Page</h1>

        <?php
        include 'connection.php';

        if(isset($_POST['submit'])){
            $s_img = $_POST['s_img'];
            $s_title = $_POST['s_title'];
            $s_con = $_POST['s_con'];

            $query = "insert into service_table (s_img,s_title,s_con) values('$s_img','$s_title','$s_con')";

            if($s_img != "" && $s_title != "" && $s_con != ""){
                mysqli_query($con,$query);
            }else{
                echo "<script>alert('Please fill all required fields');</script>";
            };
        };
        ?>


        <form method = "post">
            <div class="form-group">
                <label for="exampleInputEmail1">CHOOSE IMAGE</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="choose image" name = "s_img">
              
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">INSERT TITLE</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter title" name = "s_title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">INSERT CONTENT</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter content" name = "s_con">
            </div>
    
            <button type="submit" class="btn btn-primary" name = "submit" >Submit</button>
        </form>
    </div>
</body>

</html>