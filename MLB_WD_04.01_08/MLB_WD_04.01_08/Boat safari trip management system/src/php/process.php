<?phpinclude 'connect.php'; ?>
<?php
  if(isset($_POST['SIGN UP'])) {
    $F_name=$POST['First Name'];
    $L_name=$POST['Last Name'];
    $Address=$POST['Address'];
    $Email=$POST['Email Address'];
    $Gender=$POST['Your Gender'];
    $Age=$POST['Your Age'];
    $User_name=['User Name'];
    $Phone_no=$POST['Phone Number'];
    $password=$POST['Password'];
    $confirm_password=$POST['Confirm Password'];

    $sql="insert into `customer`(F_name,L_name,Address,Email,Gender,Age,User_name,password)
    values('$F_name','$L_name',' $Address','$Email','$Gender','$Age','$User_name',' $password')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully" ;  
    }else {
        die(mysqli_error($con));
    }
    mysqli_close($conn);
  }  

?>