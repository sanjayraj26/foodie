<?php
$con=mysqli_connect("localhost","root","","user_data");

if (mysqli_connect_error())
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM user_data_table WHERE Username='$_POST[usname]' AND Pass_word='$_POST[psname]'";

$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
{
    echo "<script>window.location.href='http://localhost/Login_page/home.html';</script>";
}
else 
{
    echo "<script>window.location.href='http://localhost/Login_page/error.html';</script>";
}
mysqli_close($con);

?>