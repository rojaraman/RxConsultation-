<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rxconsultation";
session_start();
//$p_id = $_POST["Patientid"];
$Patientid = filter_input(INPUT_POST, 'Patientid');
$pname = filter_input(INPUT_POST, 'pname');
$P_address = filter_input(INPUT_POST, 'P_address');
$P_age = filter_input(INPUT_POST, 'P_age');
$P_allergy = filter_input(INPUT_POST, 'P_allergy');
$P_blood = filter_input(INPUT_POST, 'P_blood');
$P_contact = filter_input(INPUT_POST, 'P_contact');
$P_date = filter_input(INPUT_POST, 'P_date');
$P_email = filter_input(INPUT_POST, 'P_email');
$genderbtn = filter_input(INPUT_POST, 'genderbtn');
$P_kgs = filter_input(INPUT_POST, 'P_kgs');
$P_note = filter_input(INPUT_POST, 'P_note');
$P_regtime = filter_input(INPUT_POST, 'P_regtime');
////prescription table details
//$med1 = filter_input(INPUT_POST, 'med1');
//$Morn1 = filter_input(INPUT_POST, 'Morn1');
//$mornTime1 = filter_input(INPUT_POST, 'mornTime1');
//$Noon1 = filter_input(INPUT_POST, 'Noon1');
//$noonTime1 = filter_input(INPUT_POST, 'noonTime1');
//$Eve1 = filter_input(INPUT_POST, 'Eve1');
//$eveTime1 = filter_input(INPUT_POST, 'eveTime1');
//$night1 = filter_input(INPUT_POST, 'night1');
//$nightTime1 = filter_input(INPUT_POST, 'nightTime1');
//$emptystmch1 = filter_input(INPUT_POST, 'emptystmch1');
//$beforeFood1 = filter_input(INPUT_POST, 'beforeFood1');
//$afterFood1 = filter_input(INPUT_POST, 'afterFood1');
//$days1 = filter_input(INPUT_POST, 'days1');
//$month1 = filter_input(INPUT_POST, 'month1');
//$remark1 = filter_input(INPUT_POST, 'remark1');         
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE $Patientid(medicine VARCHAR(30) PRIMARY KEY,
Morn VARCHAR(3),
Noon VARCHAR(3),
Eve VARCHAR(3),
Night VARCHAR(3),
MornTime TIME,
AftrTime TIME,
EveTime TIME,
NightTime TIME,
Emptystmch VARCHAR(3),
BeforeFood VARCHAR(3),
AftrFood VARCHAR(3),
Days INT(3),
Months INT(2),
Remark VARCHAR(30)
)";

$sql2 = "INSERT INTO patient_details(Patientid,pname,P_address,P_age,P_allergy,P_blood,P_contact,P_date,P_email,P_gender,P_kgs,P_note,P_regtime)
VALUES('$Patientid ','$pname','$P_address','$P_age','$P_allergy','$P_blood','$P_contact','$P_date','$P_email','$genderbtn','$P_kgs','$P_note','$P_regtime')";

//$sql3="INSERT INTO $p_id(Patientid,pname,medicine,Morn,Noon,Eve,Night,MornTime,AftrTime,EveTime,NightTime,Emptystmch,BeforeFood,AftrFood,Days,Months,Remark)VALUES('$p_id','$pname',$med1','$Morn1','$Noon1','$Eve1','$night1','$mornTime1','$noonTime1','$eveTime1','$nightTime1','$emptystmch1','$beforeFood1','$afterFood1','$days1','$month1','$remark1')";
//$sql3 ="INSERT INTO patient_details(Patientid,pname,medicine,Morn,Noon,Eve,Night,MornTime,AftrTime,EveTime,NightTime,Emptystmch,BeforeFood,AftrFood,Days,Months,Remark)
//VALUES('$p_id','$pname',$med1','$Morn1','$Noon1','$Eve1','$night1','$mornTime1','$noonTime1','$eveTime1','$nightTime1','$emptystmch1','$beforeFood1','$afterFood1','$days1','$month1','$remark1')";

if ($pname !== "") {
    $result2 = $conn->query($sql2);
}
$result = $conn->query($sql);
$_SESSION['patientid'] = $Patientid;
$_SESSION['pname'] = $pname;
//$result3 = $conn->query($sql3);


if ($result === TRUE & $result2 === TRUE) {
    echo "<script type='text/javascript'>alert('Prescription Saved!');</script>";
    header("Location: HomePage_NewPresTable.php");
} else {
    echo "<script type='text/javascript'>alert('Could not save prescription!');</script>" . $conn->error;
    header("Location: Homepage_CreateNewPres.php");
}

$conn->close();
?>