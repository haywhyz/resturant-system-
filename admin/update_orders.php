
            <?php
             include "../includes/header.php";
            // session_start();
            // include_once "../includes/connection.php"; 
            echo $_SESSION['customer_id'];
                if(isset($_GET['order_id'])){
                    $query = $conn->query("UPDATE `orders` SET `status`= '1' WHERE customer_id = '".$_SESSION['customer_id']."' ");
                     if ($query){
                      echo '<div class="alert alert-success dismiss">
                            order have been delivered
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='orders.php';
                        },1000)</script>";
                       
                  }
                  else{
                      echo "error".$conn->error();
                  }
              
                }

            ?>