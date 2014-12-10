    <?php

        if(isset($_POST['submit'])) { //check The Form Has Been Submitted
            
            require_once('config.php'); 

            $paragraph = $_POST["paragraph"];

            mysql_query( "INSERT INTO  `oneasia`.`home_design4`
                        (
                        `id` ,
                        `paragraph`
                        )
                        VALUES ( NULL , '".$paragraph."' );"
            );

            header("location: .../admin/updateHomePageContents.php"); // Redirecting To add_user Page
            echo "New Record Successfully Created.";

            mysql_close($con);
        }
    ?>
