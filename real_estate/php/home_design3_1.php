    <?php

        if(isset($_POST['submit'])) { //check The Form Has Been Submitted
            
            // $con = mysql_connect("localhost","root","");
            // if(!$con) {
            //     die('Could not connect:'.mysql_error());
            // }
            // mysql_select_db("oneasia",$con);

            require_once('config.php'); 

            $paragraph = $_POST["paragraph"];

            mysql_query( "INSERT INTO  `oneasia`.`home_design3_1`
                        (
                        `id` ,
                        `paragraph`
                        )
                        VALUES ( NULL , '".$paragraph."' );"
            );

            header("location: ../update_homepage.php"); // Redirecting To add_user Page
            echo "New Record Successfully Created.";

            mysql_close($con);
        }
    ?>
