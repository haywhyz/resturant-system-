 <?php 
 
require_once "../includes/connection.php";


               
                // if(isset( $_GET['menu_id'])){
                  $query = $conn->query("DELETE FROM `menu` WHERE menu_id='" . $_GET["menu_id"] . "'");
                  
                  if ($query){
                      echo '<div class="alert alert-success dismiss">
                            Menu is  Deleted
                        </div>';
                          echo "<script>
                        setTimeout(function(){
                          window.location.href='menu.php';
                        },1000)</script>";
                       
                  }
                  else{
                      echo "error".$conn->error();
                  }
                

           

            ?>    