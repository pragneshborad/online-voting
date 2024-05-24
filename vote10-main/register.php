<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$mobile=$_POST['mobile'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];
if($password!=$cpassword){
    echo '<script>
    alert("password do not match")
    window.location="signup.php";
    </script>';
}else{
    move_uploaded_file($tmp_name,"uploads/$image");
    $sql="insert into `userdata` (username,password,mobile,photo,standard,status,votes) values ('$username','$password','$mobile','$image','$std',0,0)";
    $result=mysqli_query($conn,$sql);
    if($result){
    echo '<script>
    alert("sign up succesful")
    window.location="login.php";
    </script>';
    }else{
        die("error");
    }
}
?>