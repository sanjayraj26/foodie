<?php
$con=mysqli_connect("localhost","root","","user_form");
if(mysqli_connect_errno())
{
    echo "Faiiled to connect to MYSQL: " .mysqli_connect_errno();
}

$sql="INSERT INTO user_data_table(Firstname,Lastname,Username,Pass_word) VALUES
('$_POST[fname]', '$_POST[lname]', '$_POST[uname]', '$_POST[pname]')";

if (mysqli_query($con,$sql))
{
    echo  "<script>window.location.href='http://localhost/Login_page/login.html';</script>";                  
}
else 
{
    echo "No Record Inserted";
}
mysqli_close($con)
?>