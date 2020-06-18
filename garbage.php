<?php
    include 'connect.php';
    $server="localhost";
    $user="root";
    $password="";
    $db="user_data";

    //Database connection
    $conn=new mysqli($server,$user,$password,$db);
        if(isset($_POST['submit']))
        {
          $name=mysqli_real_escape_string($conn,$_POST['name']);
          $email=mysqli_real_escape_string($conn,$_POST['email']);
          $phoneno=mysqli_real_escape_string($conn,$_POST['phoneno']);
          $customerid=mysqli_real_escape_string($conn,$_POST['customerid']);
          $password=mysqli_real_escape_string($conn,$_POST['password']);
          $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);


          $pass=password_hash($password,PASSWORD_BCRYPT);
          $cpass=password_hash($cpassword,PASSWORD_BCRYPT);


          $emailquery= "select * from registration where email='$email' ";
          $query = mysqli_query($conn,$emailquery);
          $emailcount= mysqli_num_rows($query);
          if ($emailcount>0)
          {
            ?>
            <script>
              alert("Email already exist");
             </script>
          <?php

          }
          else{
            if($password==$cpassword){
              $stmt = $conn->prepare("insert into registration(name,email,phoneno,customerid,password,cpassword) values('$name','$email','$phoneno','$customerid','$pass','$cpass')");
              $i= mysqli_query($conn,$stmt);
              if($i)
                { ?>
                <script>
                   alert("successful connection");
                </script>
               <?php
                 }
                else
                { ?>
              <script>
                  alert("No connection");
              </script>
              <?php
              }
            }
            else
            {
                ?>
                <script>
                  alert("password does not matched");
            </script>
            <?php
            }
          }
        }
    
    ?> 