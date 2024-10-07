<?php 

session_start();
$conn=mysqli_connect("localhost","root","","register_login_form");

$sql_result=mysqli_query($conn,"select * from user where name='$_POST[name]' and password='$_POST[password]'");

if($sql_result->num_rows > 0){
    echo "Login is Successfully Happened";
}
else{
    echo "You Don't have account please register first";
}
?>