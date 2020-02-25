<?php 
if(!session_id())session_start(); 
  $servername       = "localhost";
  $serverpass       = "";
  $dbname           ="lostnfound";
  $serverusername   = "root";

  $connect = new mysqli("$servername","$serverusername","$serverpass","$dbname");
  if($connect->connect_error){
     echo "connection error";
  }

  
  if(isset($_POST['additem'])){
      $item_name=$_POST['itemname'];
      $id=$_SESSION['id'];
      $category=$_POST['itemcategory'];
      $itemdescription=mysqli_real_escape_string($connect,$_POST['itemdesc']);
          if(isset($_FILES['itemimage']['name']) && !empty($_FILES['itemimage']['name'])){ 
            $image = $_FILES['itemimage']['name'];
            $target = "images/".basename($image);
            $imagename=basename($image);
            $file_tmp =$_FILES['itemimage']['tmp_name']; 
            move_uploaded_file($file_tmp,$target);
            $sql = "INSERT INTO `items`(`item_name`, `description`, `state`, `category`, `uploaded_by`, `image`)
             VALUES ('$item_name','$itemdescription','0','$category','$id','$imagename')";
              if($connect->query($sql) === TRUE ){
                move_uploaded_file($file_tmp,$target);
                echo'<script type="text/javascript">alert("Uploaded successsfully");
                      window.location.replace("/");
                    </script>';
              }else{
                echo'<script type="text/javascript">alert("An error occured");
                window.location.replace("/");
                  </script>';
              }
          }else{
            echo'<script type="text/javascript">alert("Please select an image for your item.");
              window.location.replace("/");
            </script>';
          }
          
  }

      //Members signup
    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $memberemail=$_POST['email'];
        $admno=$_POST['admission'];
        $memberphone=$_POST['phone'];
        $memberpassword=md5($_POST['password']);      
        $sql_e = "SELECT * FROM `users` WHERE `email`='$memberemail'";
        $res_e = mysqli_query($connect, $sql_e);
    
        if (mysqli_num_rows($res_e) > 0) {
          echo '<script type="text/javascript">alert("Email is already taken");
             window.location.replace("/");
            </script>';
        }else{
          $membersql="INSERT INTO `users`(`name`, `email`, `adm_no`, `password`, `phone`) 
                  VALUES ('$name','$memberemail','$admno','$memberpassword','$memberphone')";
         }
          if ($connect->query($membersql) === TRUE) {
            echo '<script type="text/javascript">alert("Welcome please login😊😊.");
             window.location.replace("/");
            </script>';
          } else {
          // echo "Error: " . $membersql . "<br>" . $conn->error;
          echo '<script type="text/javascript">alert("Something went wrong 😢.Try again");
           window.location.replace("/");
          </script>';
          }       
      }
    //  Members login backend
      if (isset($_POST['login'])) {
        $loginemail = $_POST['email'];
        $loginpassword = md5($_POST['password']);
        $loginquery = "SELECT * FROM `users` WHERE `email`='$loginemail' AND `password`='$loginpassword' LIMIT 1";
        $login_result = $connect->query($loginquery);
    
        if ($login_result->num_rows > 0) {
          $row = $login_result->fetch_assoc();
          $_SESSION['id'] = $row['id'];
          $_SESSION['user']=$row['adm_no'];
          header('location:index.php');
          exit;
        }else {
          echo '<script type="text/javascript">alert("Login failed😢😢.Try again");
          </script>';
        }
      }
?>
