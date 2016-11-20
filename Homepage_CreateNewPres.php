<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<head>
    <title>Homepage CreateNewPrescription</title>
    <link rel="stylesheet" type="text/css" href="Homepage_CreateNewPres_Style.css">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

</script>
</head>
<body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">

    <form method="post" action="DatabasePhp_NewPres.php">
        <div style="padding:10px;padding-right:25px; border: 2px solid;border-radius: 25px;border-color:RoyalBlue">
            <center>
                <h3>
                    <u>Rx Consultation - Prescription</u>
                </h3>
            </center>
            <p style="padding:0px;margin:0px;font-weight:bold;" name = "P_date" id="dated" align="right"></p>
            <p style="padding:0px;margin:0px;font-weight:bold;" name = "P_regtime" id="timed" align="right"></p>
            <script>
                var d = new Date();
                var dates = d.getDate();
                var months = d.getMonth() + 1;
                var years = d.getFullYear();
                document.getElementById("dated").innerHTML = "Date : " + dates + "/" + months + "/" + years;
                document.getElementById("timed").innerHTML = "Time : " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            </script>
    <!--        <script>
                function hidePresTable()
                {
                document.getElementById("dataTable").style.visibility = "hidden";
                document.getElementById("submit_btn").style.visibility = "hidden";
                document.getElementById("reset_btn").style.visibility = "hidden";
                document.getElementById("print_btn").style.visibility = "hidden";
                }
            </script>-->

            <table style="padding:0">
                <tr>
                    <td style="padding-right:30px;">
                        <ul>
                            <li>Patient Name :</li>
                            <li>Patient ID :</li>
                            <li>Age :</li>
                            <li>Gender : </li>
                            <li>weight : </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>&nbsp&nbsp<input type="text" name="pname"></li>
                            <li>&nbsp&nbsp<input type="text" name="Patientid"></li>
                            <li>&nbsp&nbsp<input type="text" name= "P_age" style="width:25px;"> yrs </li>
                            <li>&nbsp&nbsp<input type="radio" name="genderbtn" value="female" > Female &nbsp&nbsp <input name="genderbtn" type="radio" value="male"> Male </li>
                            <li>&nbsp&nbsp<input type="text" name="P_kgs"style="width:25px;"> kgs </li>
                        </ul>
                    </td>
                    <td style="padding-left:50px;padding-right:30px; width:25%; border-left:1px">
                        <ul>
                            <li>Contact Number :</li>
                            <li>email Address : </li>
                            <li>Address :<br><br> </li>
                            <li>Blood Group : </li>
                            <li>Medical Allergies : </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>&nbsp&nbsp<input type="text" name="P_contact" ></li>
                            <li>&nbsp&nbsp<input type="text" name="P_email" > </li>
                            <li>&nbsp&nbsp<textarea placeholder="Enter patient's address" name="P_address"></textarea></li>
                            <li>&nbsp&nbsp<input type="text" name="P_blood" style="width:20px;"></li>
                            <li>&nbsp&nbsp<input type="text" name="P_allergy"></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <input id="submit_btn1" type="SUBMIT" value="SAVE" style="padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px;width:10%;height:50%">
    <!--        <script>
                function displayPresTable()
                {
                document.getElementById("dataTable").style.visibility = "visible";
                document.getElementById("submit_btn").style.visibility = "visible";
                document.getElementById("reset_btn").style.visibility = "visible";
                document.getElementById("print_btn").style.visibility = "visible";
                }
            </script>-->

        </div>
    </form>
</body>
</html>  


