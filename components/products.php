

<section id="products" >
        <h3 class="text-center my-4 ">Our Products</h3>
        <div class="container">
            <div class="row m-0">

                <?php
                $con = mysqli_connect("localhost","root","","technoboot");
                $query = "select * from prod_table";
                $res = mysqli_query($con,$query);
                ?>

                <?php while($row = mysqli_fetch_assoc($res)){
                    $p_image = $row['p_image'];
                    $p_title = $row['p_title'];
                    $p_content = $row['p_content'];
                    
                ?>

                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <!-- edit -->
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/  <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/<?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 a mb">
                    <div class="card " data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="img-hov">
                            <img height="100" width="100" class="card-img-top" src='../assets/image/ <?php echo $p_image; ?>' alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"> <?php echo $p_title;?></h5>
                          <p class="title"><?php echo $p_content;?></p>
                          <a href="">Read More ></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </section>