<?php
include 'Connection.php';
if(isset($_GET['deleteID'])){
    $id=$_GET['deleteID'];
}

$sql="delete from * customer Where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:display_user.php');
else{
    die(mysqli_error($con));
}    

}