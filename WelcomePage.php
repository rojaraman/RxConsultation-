<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <style>
            .chat-box {
                border: solid 1px #ADADAD;
                height: 280px;
                width: 262px;
                background-color: #fff;
                position: absolute;
                right: 0px;
            }

            .chat-head {
                background-color: royalblue;
                height: 20px;
                color: #fff;
                padding: 4px 0px;
                font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                font-size: 11px;
                font-weight: bold;
                line-height: 19px;
            }

            .chat-head a {
                color: #fff;
            }

            .chat-content {
                background-color: #FFFFFF;
                height: 231px;
                overflow: auto;
            }

            .chat-footer {
                border: 0;
                border-top: solid 1px #ADADAD;
                height: 25px;
            }

            .chat-online {
                background-color: rgb(0, 179, 0);
                width: 10px;
                height: 10px;
                margin: 5px 7px;
                float: left;
                border-radius: 5px;
            }

            .chat-close {
                background: url(http://html-generator.weebly.com/files/theme/fbcp.jpg)no-repeat;
                width: 87px;
                height: 18px;
                float: right;
                margin-right: 7px;
            }

            .chat-chat-box {
                width: 200px;
                height: 25px;
                margin: 0;
                border: none;
                outline: none;
                padding-left: 5px;
                float: left;
            }

            #chat ul li {
                clear: both;
                padding: 4px;
                margin: 10px 0px 5px 0px;
                overflow: auto;
            }

            #chat li img {
                border: solid 1px #ddd;
                width: 35px;
                float: left;
            }

            #chatMessages li span {
                width: 190px;
                float: left;
                margin-left: 5px;
                word-wrap: break-word;
            }
        </style>
    </head>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

    <script>
        $(function () {
            $("#chatData").focus();


            $("#chatData").keydown(function (e) {
                if (e.keyCode == 13) {
                    var a = $("#chatData").val().trim();
                    if (a.length > 0) {
                        $("#chatData").val('');
                        $("#chatData").focus();
                        $("<li></li>").html('<span>' + a + '</span>').appendTo("#chatMessages");
                        $("#chat").animate({
                            "scrollTop": $('#chat')[0].scrollHeight
                        }, "slow");
                    }
                }
            });
        });

        function getSomething() {
            document.getElementById('content').src = "Database_PrevPres_patient.php";
//self.location.href("Database_PrevPres_patient.php");

        }
    </script>

    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
        <script language="JavaScript">
            <!--  Begin
            function greeting() {
                var today = new Date();
                var hrs = today.getHours();
                document.writeln("<div align='top'>");
                if ((hrs >= 6) && (hrs <= 18))
                {
                }
                else
                    document.write("");
                document.write("<H2 style='color:RoyalBlue;'>Good ");
                if (hrs < 6)
                    document.write("(Early) Morning");
                else if (hrs < 12)
                    document.write("Morning");
                else if (hrs <= 18)
                    document.write("Afternoon");
                else
                    document.write("Evening");
                document.writeln("!</H2>");
                document.writeln("</div>");
                document.writeln("<div style='color:RoyalBlue;' align='right'>");
                document.write("Time : ");
                dayStr = today.toLocaleString();
                document.write(dayStr);
                document.writeln("</div>");
            }
            function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11)
            {
                this[0] = m0;
                this[1] = m1;
                this[2] = m2;
                this[3] = m3;
                this[4] = m4;
                this[5] = m5;
                this[6] = m6;
                this[7] = m7;
                this[8] = m8;
                this[9] = m9;
                this[10] = m10;
                this[11] = m11;
            }
            function calendar()
            {
                var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
                var today = new Date();
                var thisDay;
                var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
                year = today.getYear() + 1900;
                thisDay = today.getDate();
                if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0))
                    monthDays[1] = 29;
                nDays = monthDays[today.getMonth()];
                firstDay = today;
                firstDay.setDate(1);
                testMe = firstDay.getDate();
                if (testMe == 2)
                    firstDay.setDate(0);
                startDay = firstDay.getDay();
                document.writeln("<div align='right'>");
                document.write("<TABLE BORDER>");
                document.write("<TR><TH COLSPAN=7>");
                document.write(monthNames.substring(today.getMonth() * 3,
                        (today.getMonth() + 1) * 3));
                document.write(". ");
                document.write(year);
                document.write("<TR><TH>Sun<TH>Mon<TH>Tue<TH>Wed<TH>Thu<TH>Fri<TH>Sat");
                document.write("<TR>");
                column = 0;
                for (i = 0; i < startDay; i++) {
                    document.write("<TD width=30>");
                    column++;
                }
                for (i = 1; i <= nDays; i++) {
                    document.write("<TD width=30>");
                    if (i == thisDay)
                        document.write("<FONT COLOR=\"#FF0000\">")
                    document.write(i);
                    if (i == thisDay)
                        document.write("</FONT>")
                    column++;
                    if (column == 7) {
                        document.write("<TR>");
                        column = 0;
                    }
                }
                document.write("</TABLE>");
                document.writeln("</div>");
            }
            greeting();
            document.write("</br>");
            calendar();
            document.write("");
            // End -->
        </script>

        <div class="chat-box" align='right'style="padding-right:5px;">
            <div class="chat-head">
                <span class="chat-online"></span> 
                <a><center>Rx Consultation</center></a> 
            </div>
            <div class="chat-content"id="chat">
                <ul id="chatMessages">
                    <li align="left">Hello Doctor! <br> Following are the prescription you prescribed :</li>
                    <li>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "rxconsultation";
                        //  $DocId = $_SESSION["DocId"];
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlshowtable = "SHOW TABLES FROM rxconsultation;";
                        $resultshowtable = $conn->query($sqlshowtable);
                        if ($resultshowtable->num_rows > 0) {
                            // output data of each row


                            while ($row = $resultshowtable->fetch_assoc()) {
                                $url = "Homepage_PreviousPres_patient.php?pid=" . $row["Tables_in_rxconsultation"];
                                echo "<br><a href='Homepage_PreviousPres.php'>" . $row["Tables_in_rxconsultation"] . "</a>";
                                //echo"<a href=".$url.">".$row["Tables_in_rxconsultation"]."</a><br>";
                                // echo "<br><u><a onclick='getSomething()'>".$row["Tables_in_rxconsultation"]."</a></u>";
                            }
                        }
                        ?>
                    </li>
                </ul>

                </body>
                </html>
