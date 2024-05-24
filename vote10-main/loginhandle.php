<?php
session_start();
include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$std=$_POST['std'];
$sql="select * from `userdata` where username='$username' and password='$password' and standard='$std'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
       $sql="select username,photo,votes,id from `userdata` where standard='group'";
       $resultgroup=mysqli_query($conn,$sql);
       if(mysqli_num_rows($resultgroup)>0){
        $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
    }
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;
    echo '<script>
    window.location="dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("invalid credentials");
    window.location="index.php";
    </script>';
}
?>