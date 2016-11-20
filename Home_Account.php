<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rxconsultation";
$DocId = $_SESSION["DocId"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlselect = "SELECT * FROM doctor_details WHERE DocId = '$DocId'";
$resultselect = $conn->query($sqlselect);
$sqlpatientselect = "SELECT * FROM patient_details WHERE Patientid = '$DocId'";
$resultpatientselect = $conn->query($sqlpatientselect);
if ($resultselect->num_rows > 0) {
    // output data of each row
    while ($row = $resultselect->fetch_assoc()) {
        echo '<br><br><br><br><br>';
        echo "<center><h1>MY ACCOUNT DETAILS </h1></center><br><br>";
        echo "<center>Docid: " . $row["DocId"] . "<br><br>Name:    " . $row["DocName"] . "<br><br>Specialization:    " . $row["DocSpec"] . "<br><br>Phone Number:    " . $row["DocPhno"] . "<br></center>";
    }
} else if ($resultpatientselect->num_rows > 0) {
    // output data of each row
    while ($row = $resultpatientselect->fetch_assoc()) {
        echo '<br><br><br><br><br>';
        echo "<center><h1>MY ACCOUNT DETAILS </h1></center><br><br>";
        echo "<center>Docid: " . $row["Patientid"] . "<br><br>Name:    " . $row["pname"] . "<br><br>Age:    " . $row["P_age"] . "<br><br>Gender:    " . $row["P_gender"] . "<br><br>Weight: " . $row["P_kgs"] . "<br><br>Contact:    " . $row["P_contact"] . "<br><br>Email:    " . $row["P_email"] . "<br><br>Address:    " . $row["P_address"] . "<br><br>Blood Group: " . $row["P_blood"] . "<br><br>Allergy:    " . $row["P_allergy"] . "<br><br>Age:    " . $row["P_age"] . "<br><br>Date of last prescription: " . $row["P_date"] . "<br><br></center>";
    }
} else {
    echo "0 results";
}
?>
<html>
    <head><title></title></head>
    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
    </body>
</html>