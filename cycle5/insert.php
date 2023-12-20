<?php
$servername="localhost";
$username="23mca052";
$password="2976";
$dbname="23mca052";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("connection failed:" .$conn->connect_error);
}
$sql="INSERT INTO student(id, mark, age, course)
VALUES(1, 63, 21, 'mca')";
if($conn->query($sql)==TRUE){
echo "new record created successfully";
}else{
echo "error: ". $sql ."<br>".$conn->error;
}
$conn->close();
?>
