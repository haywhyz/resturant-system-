 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
  <div class="row ftco-animate">
    <div class="col-md-12">
      <p class="text-center">&copy; Taste 2020. All Rights Reserved.</p>
    </div>
  </div>
</div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!-- login form -->
<div class="login-page">
  <?php
   if(isset($_POST['login'])) {

                  $email = trim(($_POST['email'])); // get username
                   $password = trim(($_POST['password'])); //Get password

                     $query = mysqli_query($conn, "SELECT * FROM `customer` WHERE email='$email' AND password='$password'");
                     $check_query = mysqli_num_rows($query); 

                       if($check_query == 1) {
                          $_SESSION['email'] = $email;
                          $query = $conn->query("SELECT * FROM `customer` WHERE email='$email'");
                          $get_user = $query->fetch_assoc();
                          $_SESSION['customer_id'] = $get_user['customer_id'];
                           echo "<script>
                            setTimeout(function(){
                              window.location.href='index.php';
                            },1000)</script>";
                                
                           
                         }
                           else {
                             echo "username or password not correct".mysqli_error($conn);
                                  }
                              }

                  ?>
  <form method="post">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-white font-weight-bold">Login</h4>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Username" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <button type="submit" name="login" class="btn btn-danger btn-block rounded-0">Login</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- register form -->
<div class="register-page">
  <!-- INSERT INTO `customer`(`customer_id`, `fullname`, `email`, `phone`, `address`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]) -->
   <?php
                if(isset($_POST['submit'])){
                 $fullname = trim(($_POST['fullname']));
                    $email = trim(($_POST['email']));
                     $phone = trim(($_POST['phone']));
                   $address = trim(($_POST['address']));
                      $password = trim(($_POST['password']));

                       $query = mysqli_query($conn, "INSERT INTO `customer`(`fullname`, `email`, `phone`, `address`, `password`) VALUES ('$fullname','$email','$phone','$address','$password')");
                     if(!$query){
                        echo '<alert class="alert alert-danger">Account  cannot inserted</alert>'.mysqli_error($conn);
                        }
                       else{
                                
                         echo '<alert class="alert alert-success">Acount successfully inserted</alert>';
                          echo "<script>
                            setTimeout(function(){
                              window.location.href='index.php';
                            },1000)</script>";
                                
                         }

                        } 

                        ?>
  <form method="post">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-white font-weight-bold">Register</h4>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="fullname" class="form-control" placeholder="Full name" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>
      </div>
       <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="address" class="form-control" placeholder="Address " required>
        </div>
      </div>
       <div class="col-md-12">
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password*" required>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-danger btn-block rounded-0">Register</button>
        </div>
      </div>
    </div>
  </form>
</div>

<style type="text/css">
  .login-page{
    background: black;
    padding: 20px;
    width: 20%;
    position: absolute;
    top: 80px;
    right: 130px;
    display: none;
  }
  .login-page input{
    height: 40px !important;
    font-size: 14px;
  }
  .login-page button{
    border-radius: 0;
    font-weight: bold;
  }
   .register-page{
    background: black;
    padding: 20px;
    width: 20%;
    position: absolute;
    top: 80px;
    right: 130px;
    display: none;
  }
  .register-page input{
    height: 40px !important;
    font-size: 14px;
  }
  .register-page button{
    border-radius: 0;
    font-weight: bold;
  }
</style>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>

<script src="js/jquery.animateNumber.min.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>

<script type="text/javascript">
  $(function(){
    $("#login").click(function(e){
      e.preventDefault();
      $('.login-page').toggle();
      $('.register-page').hide();
    });
    $('#register').click(function(e){
      e.preventDefault();
      $('.register-page').toggle();
      $('.login-page').hide();
    })
  })
</script>
</body>
</html>