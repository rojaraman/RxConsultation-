<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rxconsultation";
//prescription table details
session_start();
$p_id = $_SESSION['p_id'];
$pname = $_SESSION['pname'];
$med1 = filter_input(INPUT_POST, 'med1');
$Morn1 = filter_input(INPUT_POST, 'Morn1');
$mornTime1 = filter_input(INPUT_POST, 'mornTime1');
$Noon1 = filter_input(INPUT_POST, 'Noon1');
$noonTime1 = filter_input(INPUT_POST, 'noonTime1');
$Eve1 = filter_input(INPUT_POST, 'Eve1');
$eveTime1 = filter_input(INPUT_POST, 'eveTime1');
$night1 = filter_input(INPUT_POST, 'night1');
$nightTime1 = filter_input(INPUT_POST, 'nightTime1');
$emptystmch1 = filter_input(INPUT_POST, 'emptystmch1');
$beforeFood1 = filter_input(INPUT_POST, 'beforeFood1');
$afterFood1 = filter_input(INPUT_POST, 'afterFood1');
$days1 = filter_input(INPUT_POST, 'days1');
$month1 = filter_input(INPUT_POST, 'month1');
$remark1 = filter_input(INPUT_POST, 'remark1');         

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo $p_id;
$sql3 ="INSERT INTO $p_id(Patientid,pname,medicine,Morn,Noon,Eve,Night,MornTime,AftrTime,EveTime,NightTime,Emptystmch,BeforeFood,AftrFood,Days,Months,Remark)
VALUES('$p_id','$pname',$med1','$Morn1','$Noon1','$Eve1','$night1','$mornTime1','$noonTime1','$eveTime1','$nightTime1','$emptystmch1','$beforeFood1','$afterFood1','$days1','$month1','$remark1')";
$result3 = $conn->query($sql3);
if ($result3 === TRUE) {
    echo "<script type='text/javascript'>alert('Prescription Saved!');</script>";
    header("Location: Homepage_CreateNewPres.php");
    //header("location: HomePage_NewPresTable.php);
    
} else {
    echo "<script type='text/javascript'>alert('Could not save prescription!');</script>" .$conn->error;
    header("Location: Homepage_CreateNewPres.php");
}
$conn->close();
?>
