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
        <link rel="stylesheet" type="text/css" media="all" href="css_pages/home_design_style.css" /> <!-- MAIN THEME STYLESHEET -->
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


    // Login Validation

    function uspvalidation() {   
        window.event.returnValue = false;
        if((checkluname()) && (checklpw())) {
            window.event.returnValue = true;
        }
            
    }

    function checkluname() {
        var us= document.getElementById("luname").value;
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

    function checklpw() {
        var pass= document.getElementById("lpw").value;
        
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
                if(isset($_SESSION['USR_NAME'])) {

                    echo "<div align='right'><a href='admin.php'>Hi ".$_SESSION['USR_NAME'].",</a><br>";
                    echo " <a href='php/logout.php'> <input type='submit' name='submit' value='Logout' </a></div>";

                } else {

                    echo "<div id='sidebar-header' class='group' align='right'>
                            <form action='php/login.php'>
                                User name: <input type='text' name='luname' id='luname'><br>
                                Password: <input type='password' name='lpw' id='lpw'><br>
                                <input type='submit' name='submit' value='Login' onclick='uspvalidation();'>
                            </form>
                        </div>";
                    }
            ?>

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
				                <h3><u>Update Home Design</u></h3>
				                <!-- <div class="text-image" style="text-align:left">
                                    <img src="images/admin/admin.png" alt="Responsive and strong layout" />
                                </div> -->
				            </div>
				            
				            <div class="widget-last widget widget_text">
				                <div class="textwidget">
                                    <h4>1. Update - Responsive and strong layout ( Get Support )</h4>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    Select image to upload:<br>
                                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                    <input type="submit" value="Upload Image" name="submit">
                                    </form><br>

                                    <form action="php/home_design1.php" method="post">
                                    <textarea rows="4" cols="50" name="paragraph" id="paragraph"></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                    </form>

                                </div><br><br>

                                 <div class="textwidget">
                                    <h4>2. Update - Latest news ( Mortgage Pre-Approval )</h4>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    Select image to upload:<br>
                                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                    <input type="submit" value="Upload Image" name="submit">
                                    </form><br>

                                    <!-- Script by hscripts.com -->
                                    <script type="text/javascript">
                                    //Edit the counter/limiter value as your wish
                                    // var count = "400";
                                    // //Example: var count = "175";
                                    // function limiter(){
                                    // var tex = document.myform.paragraph.value;
                                    // var len = tex.length;
                                    // if(len > count){
                                    // tex = tex.substring(0,count);
                                    // document.myform.comment.value =tex;
                                    // return false;
                                    // }
                                    // document.myform.limit.value = count-len;
                                    // }
                                    </script>
                                    <!-- Script by hscripts.com -->


                                    <form name="myform" action="php/home_design2.php" method="post">
                                    <textarea rows="4" id="paragraph" name="paragraph" maxlength="400" wrap=physical cols=50 onkeyup=limiter()></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                        <script type="text/javascript">
                                        document.write("<input type=text style='border: none' name=limit size=1.5em readonly value="+count+" characters remaining>");
                                        </script>
                                    
                                    </form>

                                </div><br><br>

                                <div class="textwidget">
                                    <h4>3.1 Update - Other articles (Column 1)</h4>
                                    <form action="php/home_design3_1.php" method="post">
                                    <textarea rows="4" cols="50" name="paragraph" id="paragraph"></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                    </form>

                                </div><br><br>

                                <div class="textwidget">
                                    <h4>3.2 Update - Other articles (Column 2)</h4>
                                    <form action="php/home_design3_2.php" method="post">
                                    <textarea rows="4" cols="50" name="paragraph" id="paragraph"></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                    </form>

                                </div><br><br>

                                <div class="textwidget">
                                    <h4>3.3 Update - Other articles (Column 3)</h4>
                                    <form action="php/home_design3_3.php" method="post">
                                    <textarea rows="4" cols="50" name="paragraph" id="paragraph"></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                    </form>

                                </div><br><br>

                                <div class="textwidget">
                                    <h4>4. Update - Recent Post</h4>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    Select image to upload:<br>
                                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                    <input type="submit" value="Upload Image" name="submit">
                                    </form><br>

                                    <form action="php/home_design4.php" method="post">
                                    <textarea rows="4" cols="50" name="paragraph" id="paragraph"></textarea><br>
                                    <input type="submit" value="Update" name="submit">
                                    </form>

                                </div><br><br> 

				            </div>
				            
				        </div>
				        <!-- END SIDEBAR -->

				        <!-- START EXTRA CONTENT -->
                            <!-- Upload Images -->

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