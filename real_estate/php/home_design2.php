    <?php
        // if( isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["pno"])
        //     && isset($_POST["uname"]) && isset($_POST["pw"]) && isset($_POST["cpw"]) ) {

        // echo "ddd";

        if(isset($_POST['submit'])) { //check The Form Has Been Submitted
            
            $con = mysql_connect("localhost","root","");
            if(!$con) {
                die('Could not connect:'.mysql_error());
            }
            mysql_select_db("oneasia",$con);

            $paragraph = $_POST["paragraph"];

            mysql_query( "INSERT INTO  `oneasia`.`home_design2` (
                        `id` ,
                        `paragraph`
                        )
                        VALUES ( NULL , '".$paragraph."' );"
            );

            header("location: ../admin/updateHomePageContents.php"); // Redirecting To add_user Page
            echo "New Record Successfully Created.";

            mysql_close($con);
        }
    ?>
