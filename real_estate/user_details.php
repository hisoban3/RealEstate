<?php
    session_start();
?>

<html>
    
    <!-- START HEAD -->
    <head>
        
        <meta charset="UTF-8" />
        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
        
        <title>Real Estate Business</title>
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
        <!-- For iPad3 with retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png" />
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />
        <!-- [favicon] end -->
        
        <!-- CSSs -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" /> <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css_pages/user_details_style.css" /> <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" id="max-width-1024-css" href="css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
        <link rel="stylesheet" id="max-width-768-css" href="css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
        <link rel="stylesheet" id="max-width-480-css" href="css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
        <link rel="stylesheet" id="max-width-320-css" href="css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />
        
        <!-- CSSs Plugin -->
        <link rel="stylesheet" id="thickbox-css" href="css/thickbox.css" type="text/css" media="all" />
        <!-- <link rel="stylesheet" id="styles-minified-css" href="css/style-minifield.css" type="text/css" media="all" /> -->
        <link rel="stylesheet" id="buttons" href="css/buttons.css" type="text/css" media="all" />
        <link rel="stylesheet" id="cache-custom-css" href="css/cache-custom.css" type="text/css" media="all" />
        <link rel="stylesheet" id="custom-css" href="css/custom.css" type="text/css" media="all" />
	    
        <!-- FONTs -->
        <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
        <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
        
        <!-- JAVASCRIPTs -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/comment-reply.js"></script>
        <script type="text/javascript" src="js/jquery.quicksand.js"></script>
        <script type="text/javascript" src="js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="js/jquery.anythingslider.js"></script>
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery-min.js"></script>
        <script type="text/javascript" src="js/shortcodes.js"></script>
		<script type="text/javascript" src="js/jquery.colorbox-min.js"></script> <!-- nav -->
		<script type="text/javascript" src="js/jquery.tweetable.js"></script>
       
    </head>
    <!-- END HEAD -->

    <!-- Validation -->

    <script type="text/javascript" language="javascript">
        function uspvalidation()
        {   
            window.event.returnValue = false;
            if((checkuname()) && (checkpw())) {
                window.event.returnValue = true;
            }
            
        }

        function checkuname()
        {
            var us= document.getElementById("uname").value;
            var us_name = /^[A-Za-z0-9@_ ]{3,20}$/;
            //var len = us.length;
            if((us== null)||(us == "")) {
                    alert("Username is invalid")
                    return false;
            }

            {
                if(!us_name.test(us)) {
                alert("Username is invalid")
                return false;
                }
            }
                return true;
                        
        }

        function checkpw()
        {
            var pass= document.getElementById("pw").value;
            
            if((pass== null)||(pass == ""))
                {
                    alert("password is invalid")
                    return false;
                }
                    return true;
        }

</script>
<!-- End Validation -->
    
    <!-- START BODY -->
    <body class="no_js responsive boxed">
        
        <!-- START BG SHADOW -->
        <div class="bg-shadow">
            
            <!-- START WRAPPER -->
            <div id="wrapper" class="group">
                
                <!-- START HEADER -->
                <div id="header" class="group">
                    
                    <div class="group inner">
                        
                        <!-- START LOGO -->
                        <div id="logo" class="group">
                            <a href="index.php" title="One Asia">
                                <img src="images/logo.png" title="One Asia" alt="One Asia"  height = "90px" width  = "110px"/>
                            </a>
                        </div>
                        <!-- END LOGO -->

                        

                        <div id="sidebar-header" class="group" align="right">
                        <?php
                            if ($_SESSION['USR_NAME']) {

                                echo "<a href='admin.php'>Hi ".$_SESSION['USR_NAME'].",</a>";
                            }
                        ?>
                            <form action="php/logout.php">
                                <input type="submit" name="submit" value="Logout">
                            </form>
                        </div>
                        <!-- <div class="clearer"></div> -->
                        
                        <hr />
                        
                        <!-- START MAIN NAVIGATION -->
                        <div class="menu classic">
                            <ul id="nav" class="menu">
                                
                                <li>
                                    <a href="index.php">HOME</a>
                                </li>
                                
                                <li>
                                    <a href="#">RENTALS</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Apartments for Rent</a></li>
                                        <li><a href="#">House for Rent</a></li>
                                        <li><a href="#">All for Rent</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">MORTGAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Refinance</a></li>
                                        <li><a href="#">Refinance rates</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">AGENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Real estate agents</a></li>
                                        <li><a href="#">Mortgage lenders</a></li>
                                        <li><a href="#">Property managers</a></li>
                                        <li><a href="#">Agent advertising</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">ADVICE</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">All topics</a></li>
                                        <li><a href="#">Home selling</a></li>
                                        <li><a href="#">Home buying</a></li>
                                        <li><a href="#">Local topics</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="home_design.php">HOME DESIGN</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">All spaces</a></li>
                                        <li><a href="#">Bathrooms</a></li>
                                        <li><a href="#">Bedrooms</a></li>
                                        <li><a href="#">Dining rooms</a></li>
                                        <li><a href="#">Home office</a></li>
                                        <li><a href="#">Kitchens</a></li>
                                        <li><a href="#">Entryways</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">RENTALS</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Apartments for rent</a></li>
                                        <li><a href="#">House for rent</a></li>
                                        <li><a href="#">All rental listing</a></li>
                                    </ul>
                                </li>
                                
                                <!-- <li class="remove-under-1024"> -->
                                <li>
                                    <a href="#">MORE</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Buyer's Guid</a></li>
                                        <li><a href="#">Renter's Guid</a></li>
                                        <li><a href="#">Rental advertising</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- END MAIN NAVIGATION -->
                        <div id="header-shadow"></div>
                        <div id="menu-shadow"></div>
                    </div>
                    
                </div>
                <!-- END HEADER -->
				
				<!-- START PRIMARY -->
				<div id="primary" class="sidebar-left">
				    <div class="inner group">
				        <!-- START CONTENT -->
				        
				        <!-- END CONTENT -->
				        <!-- START SIDEBAR -->
				        <div class="sidebar group">
				            
				            <div class="widget-first widget text-image">
				                <h3>Users Records</h3>
				                <!-- <div class="text-image" style="text-align:left">
                                    <img src="images/admin/admin.png" alt="Responsive and strong layout" />
                                </div> -->
				            </div>
				            
				            <div class="widget-last widget widget_text">
				                <div class="textwidget">


            <?php
                require_once('./php/config.php');

                $query="SELECT * FROM login ORDER BY id DESC ";
                $result=mysql_query($query);     
                $num_rows =mysql_num_rows($result);

                if($num_rows>0)
                {

                echo '<table align="center" cellspacing="2" cellpading="2" width="90%">
                <tr >
                    <caption><h3> There Are Currently '.$num_rows.' Registered Employees.</h3></caption>

                    <td allign="left"><b>Employee ID</font></b></td>
                    <td allign="left"><b>Fist Name</font></b></td>
                    <td allign="left"><b>Last Name</font></b></td>
                    <td allign="left"><b>User Name</font></b></td>
                    <td allign="left"><b>Password</font></b></td>
                    <td allign="left"><b>E-Mail</font></b></td>
                    <td allign="left"><b>Phone No</font></b></td>
                    <td allign="left"><b>Edit</font></b></td>
                    <td allign="left"><b>Delete</font></b></td>

                </tr>';

                //fetch and print all value
                $x=0;
                while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {

                    if( $x%2 == 0 ) {
                        echo '<tr bgcolor="#CCCCCC">';
                    }
                    else {
                        echo '<tr bgcolor="#EEEEEE" >';
                    }

                    echo '
                        <td align="left"><strong>'.$row['id'].'</strong></td>
                        <td align="left" ><strong>'.$row['fname'].'</strong></td>
                        <td align="left" ><strong>'.$row['lname'].'</strong></td>
                        <td align="left" ><strong>'.$row['login_username'].'</strong></td>
                        <td align="left" ><strong>'.$row['login_password'].'</strong></td>
                        <td align="left" ><strong>'.$row['email'].'</strong></td>
                        <td align="left" ><strong>'.$row['pno'].'</strong></td>
                        <td align="left"><strong><a href="edit_record.php?eid='.$row['id'].'">Edit</strong></a></td>
                        <td align="left" ><strong><a href="delete_record_emp.php?eid='.$row['id'].'">Delete</strong></a></td>
                        </tr>';

                    $x=$x+1;

                }

                echo '</table>';
                mysql_free_result($result);
                }

                else {
                    echo'<p class="error"><h3><font color=RED> There Are Currently no Registered Employees.</font></h3></p>';
                }

                // mysql_close($connection);
            ?>


				                </div>
				            </div>
				            
				        </div>
				        <!-- END SIDEBAR -->
				        <!-- START EXTRA CONTENT -->
				        <!-- END EXTRA CONTENT -->
				    </div>
				</div>
				<!-- END PRIMARY -->
				
				<!-- START FOOTER -->
				<div id="footer">
				    <div class="inner group footer-row-1 footer-columns-4">
				        		        
				    </div>
				</div>
				<!-- END FOOTER -->
				
				<!-- START COPYRIGHT -->
                <div id="copyright">
                    <div class="inner group">
                        <div class="center">
                            <a href="#"><strong>© Copyright One Asia Asset Management, 2014. All rights reserved.</strong></a>
                        </div>
                        <div class="right">
                           <!--  <a href="https://www.facebook.com" class="socials-small facebook-small" title="Facebook">facebook</a>
                            <a href="https://www.rss.com" class="socials-small rss-small" title="Rss">rss</a>
                            <a href="https://www.twitter.com" class="socials-small twitter-small" title="Twitter">twitter</a>
                            <a href="https://www.flickr.com" class="socials-small flickr-small" title="Flickr">flickr</a>
                            <a href="https://www.skype.com" class="socials-small skype-small" title="Skype">skype</a>
                            <a href="https://www.google.com" class="socials-small google-small" title="Google">google</a> -->
                        </div>
                    </div>
                </div>
                <!-- END COPYRIGHT -->
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END BG SHADOW -->
        
        <script type="text/javascript" src="js/jquery.custom.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
        <script type="text/javascript" src="js/jquery.mobilemenu.js"></script> 
        
    </body>
    <!-- END BODY -->
</html>