<?php

$DocId = $_POST["DocId"];
$DocPwd = $_POST["DocPass"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rxconsultation";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctor_details WHERE DocId='$DocId' and DocPwd = '$DocPwd'";
$result = $conn->query($sql);

$sqlpatient = "SELECT * FROM patient_details WHERE Patientid = '$DocId' and pname = '$DocPwd'";
$resultpatient = $conn->query($sqlpatient);
$_SESSION["DocId"] = $DocId;
$_SESSION["Name"] = $DocPwd;
//echo $_SESSION["DocId"];
if ($result->num_rows > 0) {
    // output data of each row


    while ($row = $result->fetch_assoc()) {
        echo "<script type='text/javascript'>alert('You are successfully authenticated!');</script>";
        header("Location: Homepage_home.php");
    }
} else if ($resultpatient->num_rows > 0) {
    while ($row = $resultpatient->fetch_assoc()) {
        echo "<script type='text/javascript'>alert('You are successfully authenticated!');</script>";
        header("Location: Homepage_homepatient.php");
    }
} else {
    echo "<script type='text/javascript'>alert('Invalid Username or Password!');</script>";
    header("Location: index.php");
}

//
//$sqlselect = 'SELECT * FROM doctor_details WHERE DocId = " . $_POST["DocId"] . "';
//$resultselect = $conn->query($sqlselect);
//
//if ($resultselect->num_rows > 0) {
//    // output data of each row
//    while($row = $resultselect->fetch_assoc()) {
//        echo "Docid: " . $row["DocId"]. " - Name: " . $row["DocName"]. " - Specialization " . $row["DocSpec"]. " -Phone Number". $row["DocPhno"]."<br>";
//    }
//} else {
//    echo "0 results";
//}
$conn->close();
?>