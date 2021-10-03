<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smr";
$name = $_GET["username"];
$sem = $_GET['sem'];
$sub1 = $_GET['sub1'];
$sub2 = $_GET['sub2'];
$sub3 = $_GET['sub3'];
$sub4 = $_GET['sub4'];
$sub5 = $_GET['sub5'];
$sub6 = $_GET['sub6'];
$sub7 = $_GET['sub7'];
$sub8 = $_GET['sub8'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO marks(uname, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`) VALUES ('$name','$sem','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8');";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("New Record created successfully")';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>