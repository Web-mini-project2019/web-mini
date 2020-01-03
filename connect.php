<?php
$servername="localhost";
$username="root";
$password="";
$dbname="torism";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connecion failed :".$conn->connect_error);

}
else
{
    echo "connection successfull now u can communicate with ur friend sql  ('-')";

}
//$con=mysqli_connect();
//mysqli_query($con,$str);
// echo gettype($conn);
// $sql="INSERT INTO department (dept_name) values ('police')";

// if($conn->query($sql)===TRUE){
//     echo "INSERTED";
// }
// else{
//     echo"error";
// }

// $conn->close();
?>