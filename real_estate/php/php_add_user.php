 <?php
        if(isset($_POST['submit'])) { //check The Form Has Been Submitted

            $con = mysql_connect("localhost","root","");
            if(!$con) {
                die('Could not connect:'.mysql_error());
            }
            mysql_select_db("oneasia",$con);

            $fname       = $_POST["fname"];
            $lname       = $_POST["lname"];
            $email       = $_POST["email"];
            $pno         = $_POST["pno"];
            $uname       = $_POST["uname"];
            $password    = $_POST["pw"];

            $encrypted_password    = md5($password);

            mysql_query("INSERT INTO `oneasia`.`customers` ( `id` , `fname` , `lname` , `email` , `pno` , `uname` , `password`)
                        VALUES ( NULL , '".$fname."', '".$lname."', '".$email."', '".$pno."', '".$uname."', '".$encrypted_password."'
                        );"
            );

            echo "<font color=#00FF00><h3>New Record Successfully Created !</h3></font>
                  Redirecting  to create Home page now ....";

            print "<META http-equiv='refresh' content='3;URL=../index.php'>";

            mysql_close($con);
            
        }
    ?>