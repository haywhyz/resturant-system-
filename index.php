<?php
include "include/header.php"
?>


  <section class="ftco-cover" style="background-image: url(images/slider.png); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center ftco-vh-100">
        <div class="col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1>
          <h2 class="h5 ftco-subheading mb-5 ftco-animate text-capitalize">tasteful delicacies</h2>    
         
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  
  <section class="ftco-section" id="section-about">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ftco-animate">
          <h4 class="ftco-sub-title">Our Story</h4>
          <h2 class="ftco-primary-title display-4">Welcome</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-secondary btn-lg">Our Story</a></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
          <img src="images/rest.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="ftco-section" id="section-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h2 class="display-4 font-weight-bold">Today's Menu</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">


          <div class="row">
            <?php
            $query = $conn->query("SELECT * FROM `menu`");
            while($row = $query->fetch_array())
            {
             
        

            ?>

            <div class="col-md-3 ftco-animate menu-img">
              <div class="card">
                <img class="card-img-top" src="uploads/<?php echo $row['pics']; ?>" alt="Card image cap">
                <div class="card-body">
                  <div class="media menu-item" style="display: block">
                    <div class="media-body">
                      <h6 class="mt-0 text-dark font-weight-bold"><?php echo $row['menu_name']; ?></h6>
                      <div class="row mt-3">
                        <div class="col-5 text-left">
                          <h6 class="text-primary menu-price">&#8358;<?php echo $row['price']; ?></h6>
                        </div>
                        <div class="col-7">
                        
                        
                     <a href="order.php?menu_id=<?php echo $row['menu_id']; ?>" class="btn btn-danger mr-2" style="border-radius: 0">Order</a>

                     
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>


            

          

           
            
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- END section -->

  <section class="ftco-section bg-light pb-5" id="section-gallery">
    <div class="container">
      <div class="row ftco-custom-gutters">

        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h2 class="display-4 font-weight-bold mt-4">Food Gallery</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4 ftco-animate">
          <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 ftco-animate">
          <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- END section -->
<!-- Contact section -->
 <!--  <section class="ftco-section bg-light" id="section-contact">
    <div class="container">
      <div class="row">

        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h2 class="display-4">Contact Us</h2>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>

        <div class="col-md-7 mb-5 ftco-animate">
          <form action="" method="post">
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
            </div>
          </form>
        </div>

      </div>
    </div>
  </section> -->
  <!-- END section -->


 <?php
include "include/footer.php";
 ?>