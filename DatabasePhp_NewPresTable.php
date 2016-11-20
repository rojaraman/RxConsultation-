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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$Patientid = $_SESSION['patientid'];
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

if ($Morn1 == 'on') {
    $Morn1 = "Yes";
} else {
    $Morn1 = "No";
}
if ($Noon1 == 'on') {
    $Noon1 = "Yes";
} else {
    $Noon1 = "No";
}
if ($Eve1 == 'on') {
    $Eve1 = "Yes";
} else {
    $Eve1 = "No";
}
if ($night1 == 'on') {
    $night1 = "Yes";
} else {
    $night1 = "No";
}
//second row

$med2 = filter_input(INPUT_POST, 'med2');
$Morn2 = filter_input(INPUT_POST, 'Morn2');
$mornTime2 = filter_input(INPUT_POST, 'mornTime2');
$Noon2 = filter_input(INPUT_POST, 'Noon2');
$noonTime2 = filter_input(INPUT_POST, 'noonTime2');
$Eve2 = filter_input(INPUT_POST, 'Eve2');
$eveTime2 = filter_input(INPUT_POST, 'eveTime2');
$night2 = filter_input(INPUT_POST, 'night2');
$nightTime2 = filter_input(INPUT_POST, 'nightTime2');
$emptystmch2 = filter_input(INPUT_POST, 'emptystmch2');
$beforeFood2 = filter_input(INPUT_POST, 'beforeFood2');
$afterFood2 = filter_input(INPUT_POST, 'afterFood2');
$days2 = filter_input(INPUT_POST, 'days2');
$month2 = filter_input(INPUT_POST, 'month2');
$remark2 = filter_input(INPUT_POST, 'remark2');

if ($Morn2 == 'on') {
    $Morn2 = "Yes";
} else {
    $Morn2 = "No";
}
if ($Noon2 == 'on') {
    $Noon2 = "Yes";
} else {
    $Noon2 = "No";
}
if ($Eve2 == 'on') {
    $Eve2 = "Yes";
} else {
    $Eve2 = "No";
}
if ($night2 == 'on') {
    $night2 = "Yes";
} else {
    $night2 = "No";
}

//third row
$med3 = filter_input(INPUT_POST, 'med3');
$Morn3 = filter_input(INPUT_POST, 'Morn3');
$mornTime3 = filter_input(INPUT_POST, 'mornTime3');
$Noon3 = filter_input(INPUT_POST, 'Noon3');
$noonTime3 = filter_input(INPUT_POST, 'noonTime3');
$Eve3 = filter_input(INPUT_POST, 'Eve3');
$eveTime3 = filter_input(INPUT_POST, 'eveTime3');
$night3 = filter_input(INPUT_POST, 'night3');
$nightTime3 = filter_input(INPUT_POST, 'nightTime3');
$emptystmch3 = filter_input(INPUT_POST, 'emptystmch3');
$beforeFood3 = filter_input(INPUT_POST, 'beforeFood3');
$afterFood3 = filter_input(INPUT_POST, 'afterFood3');
$days3 = filter_input(INPUT_POST, 'days3');
$month3 = filter_input(INPUT_POST, 'month3');
$remark3 = filter_input(INPUT_POST, 'remark3');

if ($Morn3 == 'on') {
    $Morn3 = "Yes";
} else {
    $Morn3 = "No";
}
if ($Noon3 == 'on') {
    $Noon3 = "Yes";
} else {
    $Noon3 = "No";
}
if ($Eve3 == 'on') {
    $Eve3 = "Yes";
} else {
    $Eve3 = "No";
}
if ($night3 == 'on') {
    $night3 = "Yes";
} else {
    $night3 = "No";
}


//fourth row
$med4 = filter_input(INPUT_POST, 'med4');
$Morn4 = filter_input(INPUT_POST, 'Morn4');
$mornTime4 = filter_input(INPUT_POST, 'mornTime4');
$Noon4 = filter_input(INPUT_POST, 'Noon4');
$noonTime4 = filter_input(INPUT_POST, 'noonTime4');
$Eve4 = filter_input(INPUT_POST, 'Eve4');
$eveTime4 = filter_input(INPUT_POST, 'eveTime4');
$night4 = filter_input(INPUT_POST, 'night4');
$nightTime4 = filter_input(INPUT_POST, 'nightTime4');
$emptystmch4 = filter_input(INPUT_POST, 'emptystmch4');
$beforeFood4 = filter_input(INPUT_POST, 'beforeFood4');
$afterFood4 = filter_input(INPUT_POST, 'afterFood4');
$days4 = filter_input(INPUT_POST, 'days4');
$month4 = filter_input(INPUT_POST, 'month4');
$remark4 = filter_input(INPUT_POST, 'remark4');

if ($Morn4 == 'on') {
    $Morn4 = "Yes";
} else {
    $Morn4 = "No";
}
if ($Noon4 == 'on') {
    $Noon4 = "Yes";
} else {
    $Noon4 = "No";
}
if ($Eve4 == 'on') {
    $Eve4 = "Yes";
} else {
    $Eve4 = "No";
}
if ($night4 == 'on') {
    $night4 = "Yes";
} else {
    $night4 = "No";
}

//--
if ($beforeFood1 == 'on') {
    $beforeFood1 = "Yes";
} else {
    $beforeFood1 = "No";
}
if ($afterFood1 == 'on') {
    $afterFood1 = "Yes";
} else {
    $afterFood1 = "No";
}
if ($emptystmch1 == 'on') {
    $emptystmch1 = "Yes";
} else {
    $emptystmch1 = "No";
}
//--
if ($beforeFood2 == 'on') {
    $beforeFood2 = "Yes";
} else {
    $beforeFood2 = "No";
}
if ($afterFood2 == 'on') {
    $afterFood2 = "Yes";
} else {
    $afterFood2 = "No";
}
if ($emptystmch2 == 'on') {
    $emptystmch2 = "Yes";
} else {
    $emptystmch2 = "No";
}

//--
if ($beforeFood3 == 'on') {
    $beforeFood3 = "Yes";
} else {
    $beforeFood3 = "No";
}
if ($afterFood3 == 'on') {
    $afterFood3 = "Yes";
} else {
    $afterFood3 = "No";
}
if ($emptystmch3 == 'on') {
    $emptystmch3 = "Yes";
} else {
    $emptystmch3 = "No";
}

//--
if ($beforeFood4 == 'on') {
    $beforeFood4 = "Yes";
} else {
    $beforeFood4 = "No";
}
if ($afterFood4 == 'on') {
    $afterFood4 = "Yes";
} else {
    $afterFood4 = "No";
}
if ($emptystmch4 == 'on') {
    $emptystmch4 = "Yes";
} else {
    $emptystmch4 = "No";
}
if ($remark1 == "") {
    $remark1 = "---";
}
if ($remark2 == "") {
    $remark2 = "---";
}
if ($remark3 == "") {
    $remark3 = "---";
}
if ($remark4 == "") {
    $remark4 = "---";
}


////echo $Patientid;
////$sql3 ="INSERT INTO $Patientid(Patientid,pname,medicine,Morn,Noon,Eve,Night,MornTime,AftrTime,EveTime,NightTime,Emptystmch,BeforeFood,AftrFood,Days,Months,Remark)
////VALUES('$Patientid','$pname',$med1','$Morn1','$Noon1','$Eve1','$night1','$mornTime1','$noonTime1','$eveTime1','$nightTime1','$emptystmch1','$beforeFood1','$afterFood1','$days1','$month1','$remark1')";
//$sql3 ="INSERT INTO $Patientid(Patientid,pname,medicine)VALUES('$Patientid','$pname',$med1')";
////$sql2 ="INSERT INTO patient_details()VALUES('$Patientid ','$pname','$P_address','$P_age','$P_allergy','$P_blood','$P_contact','$P_date','$P_email','$genderbtn','$P_kgs','$P_note','$P_regtime')";
//$result3 = $conn->query($sql3);
//
if ($med1 != "" && $med2 != "" && $med3 != "" && $med4 != "") {
    $sql = "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med1', '$Morn1', '$Noon1', '$Eve1', '$night1', '$mornTime1', '$noonTime1', '$eveTime1', '$nightTime1', '$emptystmch1', '$beforeFood1', '$afterFood1', '$days1', '$month1','$remark1');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med2', '$Morn2', '$Noon2', '$Eve2', '$night2', '$mornTime2', '$noonTime2', '$eveTime2', '$nightTime2', '$emptystmch2', '$beforeFood2', '$afterFood2', '$days2', '$month2','$remark2');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med3', '$Morn3', '$Noon3', '$Eve3', '$night3', '$mornTime3', '$noonTime3', '$eveTime3', '$nightTime3', '$emptystmch3', '$beforeFood3', '$afterFood3', '$days3', '$month3','$remark3');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med4', '$Morn4', '$Noon4', '$Eve4', '$night4', '$mornTime4', '$noonTime4', '$eveTime4', '$nightTime4', '$emptystmch4', '$beforeFood4', '$afterFood4', '$days4', '$month4','$remark4');";
} else if ($med1 != "" && $med2 != "" && $med3 != "" && $med4 == "") {
    $sql = "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med1', '$Morn1', '$Noon1', '$Eve1', '$night1', '$mornTime1', '$noonTime1', '$eveTime1', '$nightTime1', '$emptystmch1', '$beforeFood1', '$afterFood1', '$days1', '$month1','$remark1');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med2', '$Morn2', '$Noon2', '$Eve2', '$night2', '$mornTime2', '$noonTime2', '$eveTime2', '$nightTime2', '$emptystmch2', '$beforeFood2', '$afterFood2', '$days2', '$month2','$remark2');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med3', '$Morn3', '$Noon3', '$Eve3', '$night3', '$mornTime3', '$noonTime3', '$eveTime3', '$nightTime3', '$emptystmch3', '$beforeFood3', '$afterFood3', '$days3', '$month3','$remark3');";
} else if ($med1 != "" && $med2 != "" && $med3 == "" && $med4 == "") {
    $sql = "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med1', '$Morn1', '$Noon1', '$Eve1', '$night1', '$mornTime1', '$noonTime1', '$eveTime1', '$nightTime1', '$emptystmch1', '$beforeFood1', '$afterFood1', '$days1', '$month1','$remark1');";
    $sql .= "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
VALUES ('$med2', '$Morn2', '$Noon2', '$Eve2', '$night2', '$mornTime2', '$noonTime2', '$eveTime2', '$nightTime2', '$emptystmch2', '$beforeFood2', '$afterFood2', '$days2', '$month2','$remark2');";
} else if ($med1 != "" && $med2 == "" && $med3 == "" && $med4 == "") {
    $sql = "INSERT INTO $Patientid (medicine, Morn, Noon, Eve, Night, MornTime, AftrTime, EveTime, NightTime, Emptystmch, BeforeFood, AftrFood, Days, Months,Remark)
 VALUES ('$med1', '$Morn1', '$Noon1', '$Eve1', '$night1', '$mornTime1', '$noonTime1', '$eveTime1', '$nightTime1', '$emptystmch1', '$beforeFood1', '$afterFood1', '$days1', '$month1','$remark1');";
} else {
    echo 'Please fill the following table';
}
if ($conn->multi_query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Prescription Saved!');</script>";
    header("Location: Homepage_CreateNewPres.php");
} else {
    echo "<script type='text/javascript'>alert('Could not save prescription!');</script>" . $conn->error;
}
//if ($result3 === TRUE) {
//    
//    echo "<script type='text/javascript'>alert('Prescription Saved!');</script>";
//    header("Location: Homepage_CreateNewPres.php");
//    
//} else {
//    echo "<script type='text/javascript'>alert('Could not save prescription!');</script>" .$conn->error;
//   // header("Location: Homepage_CreateNewPres.php");
//}
$conn->close();
?>