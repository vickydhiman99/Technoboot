<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/product.css">

</head>

<body>

<?php include 'component/sidebar.php'; ?>



    <div class="box">
        <h1 class="bg-info">PRODUCT PAGE</h1>
        <?php 
            include 'connection.php';

            if(isset($_POST['submit'])){

                $target = "../assets/image/".basename($_FILES['p_img']['name']);

                $img = $_FILES['p_image']['name'];
                $title = $_POST['p_title'];
                $content = $_POST['p_content'];

                $query = "insert into prod_table (p_image,p_title,p_content) values ('$img','$title','$content')";
                

                if($img != "" && $title != "" && $content != ""){
                    mysqli_query($con,$query);
                    if(move_uploaded_file($_FILES['p_img']['tmp_name'],$target)){
                    echo "<script> alert('image uploaded successfully.'); </script>";
                    }else{
                    echo "<script> alert('image upload error.'); </script>";
                    };
                }else{
                    echo 'Please fill all fields.';
                };

        };

        ?>
        <form method ="post" enctype = "multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Select Name</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="choose image" name = 'p_img'>
              
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Enter Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="type Name" name = 'p_title'>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Enter Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Type Email" name = 'p_con'>
            </div>
    
            <button type="submit" class="btn btn-success" name = 'submit'>Submit</button>
        </form>
    </div>
</body>

</html>