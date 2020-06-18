<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $customerid=$_POST['customerid'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    //Database connection
    $conn=new mysqli('localhost','root','','user_data');
    if($conn->connect_error)
    {
        die('connection Failed : '.$conn->connect_error);
    }
    else
    {
        if($password==$cpassword)
        {
        $stmt = $conn->prepare("insert into registration(name,email,phoneno,customerid,password,cpassword) values(?,?,?,?,?,?)");

        $stmt->bind_param("ssiiss",$name,$email,$phoneno,$customerid,$pass,$cpass);
        $stmt->execute();
        echo "registeration successful";
        $stmt->close();
        $conn->close();
    }
    else{
        ?>
        <script>
            alert("password does not matched");
        </script>
        <?php
    }
}
}
else
{
    header("index4.php");
    exit();
}

?>