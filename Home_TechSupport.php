<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>jQuery UI Accordion - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                $("#accordion").accordion();
            });
        </script>
    </head>
    <body style="background-image: url('images/backgrd.png');background-repeat:no-repeat;background-size:100%;">
    <center><br><br>
        <h1>Technical Support</h1> <br>
        <div style="border: solid">
            <form method="post" action="TechSupportMail.php">
                Name : <input type="text" name="name"><br>
                Phone no : <input type="text" name="phno"><br>
                Issue : <input type="text" name="issue"><br>
                Message : <input type="textArea" placeholder="Enter your issue details here........" name="message"><br>
                <input type="Submit" value="Send" name="btn_Send"><br>
            </form>
        </div>
    </center>

    <div id="accordion">
        <h3> How do I create new prescription?</h3>
        <div>
            <p>
                If you have logged in using valid Doctor id and password, then you can observe "Create new prescription" option to the lefthand side.
                On clicking the option, first you will be asked to enter patient details . Please note that, Here you have to create account for patient
                and generate patient id. Click on save. This will direct you to prescription table. Save the prescription after prescribing medicines.
            </p>
        </div>
        <h3>Can I print the prescription?</h3>
        <div>
            <p>
                After prescription is saved, Goto View REcent prescription tab and search for the patient id which was generated earlier
                while creating new prescription. Click on Search Button . Now you can print the prescription.
            </p>
        </div>
        <h3>How can I edit my account details?</h3>
        <div>
            <p>
                There is a tab on the top of the web page for viewing account information. For modifications, please write your concern in
                above form and send it to us for modifications.
            </p>

        </div>
        <h3>Why am I getting error alert message ?</h3>
        <div>
            <p>
                Please check the details you have entered. Note that Patient id is supposed to be unique and in "RXP###" format. 
                Patient name and id are mandatory.
            </p>
        </div>
    </div>


</body>
</html>


</body>

</html>
