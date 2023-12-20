<?php
$servername="localhost";
$username="23mca052";
$password="2976";
$dbname="23mca052";
$conn=new mysqli($servernamne,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:". $conn->connect_error);
}
$COURSE=$_POST['course'];
$MARK=$_POST['mark'];
$AGE=$_POST['age'];
$sql="INSERT INTO STUDENT(course, mark, age)VALUES('$COURSE', '$MARK', '$AGE')"; 
if($conn->query($sql)===TRUE){
echo "data inserted successfully";
}else{
echo "error:". $sql ."<br>". $conn->error;
}

$conn->close();
?>

