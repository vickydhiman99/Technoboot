 <!-- --------------------Service section start -->

 <section id="service">
        <div class="container">
            <h3 class="text-center mb-3">Our Services</h3>
            <p class="text-center mt-1 mb-5">Make your Business Visible and Inhance your Online Visibility, all over the
                Internet with Website & Android/Ios Applications and Developed by us we offer Digital Marketing Service
                SMM & SEO, SEM for boost your Business</p>

            <div class="row m-0">
                
                <?php
                include 'connection.php';
                $query = 'select * from service_table';
                $res = mysqli_query($con,$query);
                ?>

                <?php while($row = mysqli_fetch_assoc($res)){?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12  d-flex justify-content-center mb-3 a">
                    <div class="card service-card" style="width: 18rem;">
                        <img class="card-img-top service-img" src = "<?php echo $row['s_img']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text-center service-head"> <?php echo $row['s_title']; ?></h5>
                            <p class="card-text text-center service-con">Co<?php echo $row['s_con']; ?>n</p>
                            <a href="#" class="btn btn-dark mx-auto">Read More</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

    <!-- --------------------Service section End --------------------------------------->