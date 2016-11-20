<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rxconsultation";
$Search = filter_input(INPUT_POST, 'SearchString');
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlsearch = "SELECT * FROM patient_details WHERE Patientid='$Search'";
$resultsearch = $conn->query($sqlsearch);
$sqlsearchtable = "SELECT * FROM $Search";
$resultsearchtable = $conn->query($sqlsearchtable);
$_SESSION["SearchString"] = $Search;

echo"<html>
    <style>
    body{
        background-image: url('images/backgrd.png');
        background-repeat:no-repeat;
        background-size:100%;
    }
    </style>
    <body>";

if ($resultsearch->num_rows > 0) {
    // output data of each row


    while ($row = $resultsearch->fetch_assoc()) {

        //echo "Patient Name :" . $row["pname"]."Patient ID : ". $row["Patientid"]."Age : ". $row["P_age"]." Gender : ". $row["P_gender"]."weight : ". $row["P_kgs"]."Contact Number : ". $row["P_contact"]."email Address : " . $row["P_email"]."Address : " . $row["P_address"]. "<br><br>Blood Group : " . $row["P_blood"]. "<br>Medical Allergies : " . $row["P_allergy"]."<br>";

        echo "<html>
    <head>";
        echo "<body style='background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;'>
        <title></title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='HomePage_PreviousPres_Style.css'>
    </head>
    <style>
    body{
        background-image: url('images/backgrd.png');
        background-repeat:no-repeat;
        background-size:100%;
    }
    </style>
    <body style='background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;'>
    <center>
        <form name= 'PrevSearch' method='Post' action='Database_PrevPres.php' >
            <input class='textbox' id='searchstring' type='text' name='SearchString' placeholder='Enter Patient ID to Search prescription'> &nbsp; 
            <button name='Searchbtn' id='searchbtn' class='Search_btn'>Search</button>
        </form>
        <br><br> 
     </center>
    <br><br><br>
    <table style='padding:0' >
                <tr>
                    <td style=' border-right: thin solid royalblue;'>
                        <ul style='list-style-type:none; '>
                            <li>Patient Name :    " . $row["pname"] . " </li>
                            <li>Patient ID :     " . $row["Patientid"] . "</li>
                            <li>Age :     " . $row["P_age"] . "</li>
                            <li>Gender :    " . $row["P_gender"] . "</li>
                            <li>weight :      " . $row["P_kgs"] . "</li>
                        </ul>
                    </td>
                    <td style='width:25%;'>
                        <ul style='list-style-type:none; '>
                            <li>Contact Number :     " . $row["P_contact"] . "</li>
                            <li>email Address :     " . $row["P_email"] . "</li>
                            <li>Address :     " . $row["P_address"] . "<br><br> </li>
                            <li>Blood Group :     " . $row["P_blood"] . "</li>
                            <li>Medical Allergies :     " . $row["P_allergy"] . "</li>
                        </ul>
                    </td>
                </tr>
            </table>
    </body>    
</html>";

        //echo "<center>Docid: " . $row["DocId"]. "<br><br>Name:    " . $row["DocName"]. "<br><br>Specialization:    " . $row["DocSpec"]. "<br><br>Phone Number:    ". $row["DocPhno"]."<br></center>";
        // header("Location: Homepage_home.php");
    }
} else {
    echo "<script type='text/javascript'>alert('Invalid !');</script>";
    //header("Location: index.php");
}
if ($resultsearchtable->num_rows > 0) {
    // output data of each row

    echo"  <table  border='1' style='padding:0px;margin:0px;table['border-collapse']:collapse; table['border-width']:2px; width:auto;'>
     <tr>
                	
                <th rowspan='2'>Sno.</th>
                <th rowspan='2' style='width: 31%;'>Name of medicine</th>
                <th colspan='4'style='width:25%;'>Period / Dosage</th>
                <th rowspan='2'>Empty Stomach</th>
                <th rowspan='2'>Before food</th>
                <th rowspan='2'>After food</th>
                <th colspan='2'>Time Duration</th>
                <th rowspan='2'>Remarks/Note</th>
            </tr>
            <tr>
                <td>Morning</td>
                <td>Noon</td>
                <td>Evening</td>
                <td>Night</td>
                <td>Days</td>
                <td>Months</td>
            </tr>";

    $i = 1;
    while ($row = $resultsearchtable->fetch_assoc()) {
        echo "<link rel='stylesheet' type='text/css' href='HomePage_PreviousPres_Style.css'> 
             <table style='padding:0px;margin:0px; table.border-collapse:collapse; table.border-width:2px; width:auto;'>
     
            <tr>
                <td rowspan='2' style='width:4%;'> $i </td>
                <td style='width:35.5%; align:center; color:royalblue;'>" . $row["medicine"] . "</td>
                <td style='color:royalblue;'>  " . $row["Morn"] . "<br>"
        . $row["MornTime"] . "</td>
                <td style='color:royalblue;'>  " . $row["Noon"] . "<br>"
        . $row["AftrTime"] . "</td>
                <td style='color:royalblue;'>  " . $row["Eve"] . "<br>"
        . $row["EveTime"] . "</td>
                <td style='color:royalblue; width:1%;'>  " . $row["Night"] . "<br>"
        . $row["NightTime"] . "</td>
                <td style='color:royalblue;width:9%; align:center;'> " . $row["Emptystmch"] . "</td>
                <td style='color:royalblue;width:9%;'>  " . $row["BeforeFood"] . "</td>
                <td style='color:royalblue;width:8%;'>  " . $row["AftrFood"] . "</td>
                <td style='width:5%; align:center; color:royalblue;'>  " . $row["Days"] . "</td>
                <td style='width:5%; align:center; color:royalblue;'>  " . $row["Months"] . "</td>
                <td style='width:10%; align:center; color:royalblue;'>  " . $row["Remark"] . "</td>               
            </tr>
            <tr>
            </tr>
            </table>
            <center>
               
                <input id='print_btn' type='button' value='PRINT' onclick='printFrame();' style='padding-left:20px;padding-right:20px;width:10%;'>
                <script>
                    function printFrame() {
                    document.getElementById('searchstring').style.visibility = 'hidden';
                    document.getElementById('searchbtn').style.visibility = 'hidden';
                    document.getElementById('print_btn').style.visibility = 'hidden';
                        window.print();
                    document.getElementById('searchstring').style.visibility = 'visible';
                    document.getElementById('searchbtn').style.visibility = 'visible';
                    document.getElementById('print_btn').style.visibility = 'visible';
}
                    </script>
            </center>";

        $i++;
    }
    echo '<h3>Note :</h3><textarea> </textarea><br><br>
            <h3>Signature</h3>';
} else {
    echo "echo '<script type='text/javascript'>alert('Patient id doesnot exist!');</script>'" . $conn->error;
    header("Location: Homepage_PreviousPres.php");
}

$conn->close();
?>
