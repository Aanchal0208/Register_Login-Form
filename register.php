<?php 

$conn=mysqli_connect("localhost","root","","register_login_form");

mysqli_query($conn,"insert into user(name, password) values('$_POST[name]', '$_POST[password1]')");

header("location: signin.html");
?>