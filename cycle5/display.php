<?php
$servername = "localhost";
$username = "23mca052";
$password = "2976";
$dbname = "23mca052";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mark = $_POST['mark'];
$course = $_POST['course'];
$age = $_POST['age'];

$sql = "INSERT INTO STUDENT (mark, course, age) VALUES ($mark, '$course', $age)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";

    $sql2 = "SELECT mark, course, age FROM STUDENT";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>mark</th><th>Course</th><th>Age</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['mark']}</td>";
            echo "<td>{$row['course']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>