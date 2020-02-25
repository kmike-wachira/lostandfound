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
  // print("Connected");
  
  function getName($connect,$ids){
    $sql ="SELECT `industry_name` FROM  users WHERE `id` = $ids ";
    $result = $connect->query($sql);
    if($result){
      $rown=$result->fetch_assoc();
      $industryid = $rown['industry_name'];
    }else{
      $industryid ="Poetry industry";
    }
    return $industryid;
  }
  // get all data user data

  function getItems($connect,$ids){
    $sql ="SELECT * FROM  users WHERE `id` = $ids";
    $result = $connect->query($sql);
    $items=array();
    if($result){
      $rown=$result->fetch_array();
      array_push($items,$rown);
      return $items;
    }else{
     return "<h1>".'Nothing to display'."</h1>";
    }  
  }

  // add poem to database
  if(isset($_POST['additem'])){
      $item_name=$_POST['itemname'];
      // $id=$_SESSION['id'];
      $category=$_POST['itemcategory'];
      $itemdescription=mysqli_real_escape_string($connect,$_POST['itemdesc']);
          if(isset($_FILES['itemimage']['name']) && !empty($_FILES['itemimage']['name'])){ 
            $image = $_FILES['itemimage']['name'];
            $target = "images/".basename($image);
            $imagename=basename($image);
            $file_tmp =$_FILES['itemimage']['tmp_name']; 
            move_uploaded_file($file_tmp,$target);
            $sql = "INSERT INTO `items`(`item_name`, `description`, `state`, `category`, `uploaded_by`, `image`)
             VALUES ('$item_name','$itemdescription','0','$category','5','$imagename')";
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
        $memberindname=$_POST['indname'];
        $memberphone=$_POST['phone'];
        $memberpassword=md5($_POST['password']);
        $memberCpassword=md5($_POST['cpassword']);
        if($memberpassword == $memberCpassword){
        $sql_e = "SELECT * FROM `users` WHERE `User name`='$memberemail'";
        $res_e = mysqli_query($connect, $sql_e);
    
        if (mysqli_num_rows($res_e) > 0) {
          echo '<script type="text/javascript">alert("Email is already taken");
             window.location.replace("signup.php");
            </script>';
        }else{
          $membersql="INSERT INTO `users`(`Full Name`, `industry_name`, `User name`, `password`, `phone`)
           VALUES ('$name','$memberindname','$memberemail','$memberpassword','$memberphone')";
         }
          if ($connect->query($membersql) === TRUE) {
            echo '<script type="text/javascript">alert("Weldcome  to the poetic empire.");
             window.location.replace("signin.php");
            </script>';
          } else {
          // echo "Error: " . $membersql . "<br>" . $conn->error;
          echo '<script type="text/javascript">alert("Something went wrong");
           window.location.replace("signup.php");
          </script>';
          }
        }else{
          echo '<script type="text/javascript">alert("PASSWORD MISMATCH");
           window.location.replace("signup.php");
          </script>';
    
        }
      }
    //  Members login backend
      if (isset($_POST['login'])) {
        $loginemail = $_POST['email'];
        $loginpassword = md5($_POST['password']);
        $loginquery = "SELECT * FROM `users` WHERE `User name`='$loginemail' AND `password`='$loginpassword' LIMIT 1";
        $login_result = $connect->query($loginquery);
    
        if ($login_result->num_rows > 0) {
          $row = $login_result->fetch_assoc();
          $_SESSION['id'] = $row['id'];
          $_SESSION['user']=$row['industry_name'];
          header('location:index.php');
          exit;
        }else {
          echo '<script type="text/javascript">alert("Login failed.Try again");
           window.location.replace("signin.php");
          </script>';
        }
      }
?>
