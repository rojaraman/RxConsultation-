<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="HomePage_PreviousPres_Style.css">
    </head>
    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
    <center>
        <form name= "PrevSearch" method="Post" action="Database_PrevPres.php" >
            <input class="textbox" type="text" name="SearchString" placeholder="Enter Patient ID to Search prescription"> &nbsp; 
            <button name="Searchbtn" class="Search_btn">Search</button>
        </form>
        <br><br> 
    </center>
    <br><br><br>
    <table style="padding:0" >
        <tr>
            <td style=" border-right: thin solid royalblue;">
                <ul style="list-style-type:none; ">
                    <li>Patient Name : </li>
                    <li>Patient ID :</li>
                    <li>Age :</li>
                    <li>Gender : </li>
                    <li>weight : </li>
                </ul>
            </td>
            <td style="width:25%;">
                <ul style="list-style-type:none; ">
                    <li>Contact Number :</li>
                    <li>email Address : </li>
                    <li>Address :<br><br> </li>
                    <li>Blood Group : </li>
                    <li>Medical Allergies : </li>
                </ul>
            </td>
        </tr>
    </table>
    <table  border="1" style="padding:0px;margin:0px; width:auto;">
        <tr>
            <th rowspan="2">Select</th>	
            <th rowspan="2">Sno.</th>
            <th rowspan="2" style="width: 100%; ">Name of medicine</th>
            <th colspan="4">Period / Dosage</th>
            <th rowspan="2">Empty Stomach</th>
            <th rowspan="2">Before food</th>
            <th rowspan="2">After food</th>
            <th colspan="2">Time Duration</th>
            <th rowspan="2">Remarks/Note</th>
        </tr>
        <tr>
            <td>Morning</td>
            <td>Noon</td>
            <td>Evening</td>
            <td>Night</td>
            <td>Days</td>
            <td>Months</td>
        </tr>
    </table>
    <h3>Note :</h3><textarea> </textarea><br><br>
    <h3>Signature</h3>
</body>    
</html>