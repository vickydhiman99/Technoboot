<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/user.css">

</head>

<body>

<?php include 'component/sidebar.php'; ?>

    <?php
        include 'connection.php';
        $query = "select * from user_data";
        $res = mysqli_query($con,$query);
    ?>

    <div class="box">
        <h1>User Page</h1>
        <table class="table table-striped table-bordered table-success">
            <tr>
               <th>Sl No.</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Message</th>
               <th>Date</th>
               <th>Action</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($res)){?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['f_name']?></td>
                    <td><?php echo $row['l_name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['message']?></td>
                    <td><?php echo $row['date']?></td>
                    <td>
                        <button>Delete</button>
                        <button>Edit</button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>