<!DOCTYPE html>
<html>
    <head>
        <title>Rx Consultation Login </title>
        <link rel="stylesheet" type="text/css" href="RxConsultation_Style.css">
    </head>
    <body bgcolor="azure">
        <table>
            <tr style="padding:0;vertical-align:top;">
                <td rowspan=2>
                    <img id="background_image" src="images/medical.png"
                         style="width:966px; height:735px;visibility:visible;display:block;background-color:rgb(0,114,198);">
                </td>
                <td colspan=2 align="center">
                    <div id="Home_Logo" align="center">
                        <img id="logo_image" align="right" src="images/Rx7.png" alt="Rx"
                             style="width:100px; height:100px;visibility:visible;background-color:rgb(0,114,198);">
                        <h1 align="center">R<sub>x</sub> &nbsp&nbsp&nbsp&nbsp&nbsp Consultation</h1>
                    </div>
                    <br><br>
                    <h4>Sign in with your ID and password</h4>
                    <br>
                    <div align="center">
                        <form name= "userLogin" align="top" method="Post" action="DatabasePhp_RxC.php">
                            <input type="text" name = "DocId" id="Doc_id" class="inputs" placeholder="Login Id" /> <br>
                            <input type="password" name="DocPass" id="Doc_pass" class="inputs" placeholder="Password" /> <br>
                            <input type="checkbox"> Remember me <br><br>
                            <input type="submit" name="submit" value="Login">

                        </form>
                    </div>  
                </td>
                <td></td>
        </table>               
    </body>
</html>
