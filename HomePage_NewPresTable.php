<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="Homepage_CreateNewPres_Style.css">
    </head>
    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
        <form method="post" action="DatabasePhp_NewPresTable.php">
            <table id="dataTable" border="1" style="padding:0px;margin:0px; width:auto;">
                <tr>
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
                <tr>
                    <td> 1 </td>
                    <td><input style="width:90%; align:center; color:royalblue;" type="text" name="med1" id="med1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="Morn1" id="Morn1"><br>
                        <input style="color:royalblue;" type="time" name="mornTime1" id="mornTime1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="Noon1" id="Morn1"><br>
                        <input style="color:royalblue;" type="time" name="noonTime1" id="noonTime1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="Eve1" id="Eve1"><br>
                        <input style="color:royalblue;" type="time" name="eveTime1" id="eveTime1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="night1" id="night1"><br>
                        <input style="color:royalblue;" type="time" name="nightTime1" id="nightTime1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="emptystmch1" id="emptystmch1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="beforeFood1" id="beforeFood1"></td>
                    <td><input style="color:royalblue;" type="checkbox" name="afterFood1" id="aftrFood1"></td>
                    <td><input style="width:35%; align:center; color:royalblue;" type="text" name="days1" id="days1"></td>
                    <td><input style="width:35%; align:center; color:royalblue;" type="text" name="month1" id="month1"></td>
                    <td><input style="width:75%; margin:5%;  align:center; color:royalblue;" type="text" name="remark1" id="remark1"></td>               
                </tr>

                <tr>
                    <td> 2 </td>
                    <td><input style="width:90%; align:center;" type="text" name="med2" id="med1"></td>
                    <td><input type="checkbox" name="Morn2" id="Morn2"><br>
                        <input type="time" name="mornTime2" id="mornTime2"></td>
                    <td><input type="checkbox" name="Noon2" id="Morn2"><br>
                        <input type="time" name="noonTime2" id="noonTime2"></td>
                    <td><input type="checkbox" name="Eve2" id="Eve2"><br>
                        <input type="time" name="eveTime2" id="eveTime2"></td>
                    <td><input type="checkbox" name="night2" id="night2"><br>
                        <input type="time" name="nightTime2" id="nightTime2"></td>
                    <td><input type="checkbox" name="emptystmch2" id="emptystmch2"></td>
                    <td><input type="checkbox" name="beforeFood2" id="beforeFood2"></td>
                    <td><input type="checkbox" name="afterFood2" id="aftrFood2"></td>
                    <td><input style="width:35%; align:center;" type="text" name="days2" id="days2"></td>
                    <td><input style="width:35%; align:center;" type="text" name="month2" id="month2"></td>
                    <td><input style="width:75%; margin:5%;  align:center;" type="text" name="remark2" id="remark2"></td>               
                </tr>

                <tr>
                    <td> 3 </td>
                    <td><input style="width:90%; align:center;" type="text" name="med3" id="med3"></td>
                    <td><input type="checkbox" name="Morn3" id="Morn3"><br>
                        <input type="time" name="mornTime3" id="mornTime3"></td>
                    <td><input type="checkbox" name="Noon3" id="Morn3"><br>
                        <input type="time" name="noonTime3" id="noonTime3"></td>
                    <td><input type="checkbox" name="Eve3" id="Eve3"><br>
                        <input type="time" name="eveTime3" id="eveTime3"></td>
                    <td><input type="checkbox" name="night3" id="night3"><br>
                        <input type="time" name="nightTime3" id="nightTime3"></td>
                    <td><input type="checkbox" name="emptystmch3" id="emptystmch3"></td>
                    <td><input type="checkbox" name="beforeFood3" id="beforeFood3"></td>
                    <td><input type="checkbox" name="afterFood3" id="aftrFood3"></td>
                    <td><input style="width:35%; align:center;" type="text" name="days3" id="days3"></td>
                    <td><input style="width:35%; align:center;" type="text" name="month3" id="month3"></td>
                    <td><input style="width:75%; margin:5%;  align:center;" type="text" name="remark3" id="remark3"></td>               
                </tr>

                <tr>
                    <td> 4 </td>
                    <td><input style="width:90%; align:center;" type="text" name="med4" id="med4"></td>
                    <td><input type="checkbox" name="Morn4" id="Morn4"><br>
                        <input type="time" name="mornTime4" id="mornTime4"></td>
                    <td><input type="checkbox" name="Noon4" id="Morn4"><br>
                        <input type="time" name="noonTime4" id="noonTime4"></td>
                    <td><input type="checkbox" name="Eve4" id="Eve4"><br>
                        <input type="time" name="eveTime4" id="eveTime4"></td>
                    <td><input type="checkbox" name="night4" id="night4"><br>
                        <input type="time" name="nightTime4" id="nightTime4"></td>
                    <td><input type="checkbox" name="emptystmch4" id="emptystmch4"></td>
                    <td><input type="checkbox" name="beforeFood4" id="beforeFood4"></td>
                    <td><input type="checkbox" name="afterFood4" id="aftrFood4"></td>
                    <td><input style="width:35%; align:center;" type="text" name="days4" id="days4"></td>
                    <td><input style="width:35%; align:center;" type="text" name="month4" id="month4"></td>
                    <td><input style="width:75%; margin:5%;  align:center;" type="text" name="remark4" id="remark4"></td>               
                </tr>
            </table>
            <h3>Note :</h3><textarea name = "P_note"> </textarea><br><br>
            <p align="right"> <h3>Signature</h3> </p>
<!--        <center>
            <input id="submit_btn" type="SUBMIT" value="SAVE" style="padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px;width:10%;height:50%">
            <input id="reset_btn" type="RESET" value="RESET" style="padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px;width:10%;height:50%">
            <input id="print_btn" type="button" value="PRINT" onclick="printFrame();" style="padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px;width:10%;height:50%">
            <script>
                function printFrame() {
                    document.getElementById("submit_btn").style.visibility = "hidden";
                    document.getElementById("reset_btn").style.visibility = "hidden";
                    document.getElementById("print_btn").style.visibility = "hidden";
                    window.print();
                    document.getElementById("submit_btn").style.visibility = "visible";
                    document.getElementById("reset_btn").style.visibility = "visible";
                    document.getElementById("print_btn").style.visibility = "visible";
                }
            </script>
        </center>-->
    </form>
</body>
</html>