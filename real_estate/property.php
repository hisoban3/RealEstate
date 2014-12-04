<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
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
        <link rel="stylesheet" type="text/css" media="all" href="style.css" /> <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" id="max-width-1024-css" href="css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
        <link rel="stylesheet" id="max-width-768-css" href="css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
        <link rel="stylesheet" id="max-width-480-css" href="css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
        <link rel="stylesheet" id="max-width-320-css" href="css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />
        
        <!-- CSSs Plugin -->
        <link rel="stylesheet" id="thickbox-css" href="css/thickbox.css" type="text/css" media="all" />
        <link rel="stylesheet" id="styles-minified-css" href="css/style-minifield.css" type="text/css" media="all" />
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

        function checkpw()
        {
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
                            <a href="index.html" title="One Asia">
                                <img src="images/logo.png" title="One Asia" alt="One Asia"  height = "90px" width  = "110px"/>
                            </a>
                        </div>
                        <!-- END LOGO -->
                        
           

                        <!-- <div class="clearer"></div> -->
                        
                        <hr />
                        
                        <!-- START MAIN NAVIGATION -->
                        <?php
                         
                         include("mainmenu.php");
                        ?>
                        <!-- END MAIN NAVIGATION -->
                        <div id="header-shadow"></div>
                        <div id="menu-shadow"></div>
                    </div>
                    
                </div>
                <!-- END HEADER -->
                
                <!-- BEGIN NIVO SLIDER -->
				
				
				<!-- START PRIMARY -->
				<div id="primary" class="sidebar-left">
				    <div class="inner group">
				        <!-- START CONTENT -->
				        <div id="content-home" class="content group">
				            <div class="hentry group">
				                <div class="section blog">
				                    
				                    <h3 class="title">Quick Search</h3>

    
				                    <div class="hentry category-romantic-vintage tag-romantic-vintage hentry-post sticky">


                                    <?php
                 require_once 'php/config.php';

                echo '<form class="select" action="" method="post">';
                echo '<select   name="propertycategory" >';
                echo '<option value="">-----ALL Property Type -----</option>-->';
                $query="SELECT propertycategory FROM property_category";
                $result = mysql_query($query) or die(mysql_error());
                while ($row = mysql_fetch_assoc($result))  
                {  
                echo '<option value="' . $row['propertycategory'] . '"> ' . $row['propertycategory'] .'</option>'; 
        
                }
                echo '</select>'; 
 echo'';?>


        <?php
        echo'
        
        <input type="submit"   value="Search"  name="go"   />';
         echo '</form>';
         
        ?>
           
                               <?php
error_reporting(E_ALL ^ E_NOTICE);



$propertyname = $_POST['propertyname'];
$propertycategory = $_POST['propertycategory'];

$propertyprice = $_POST['propertyprice'];


$sql1 = "SELECT * FROM property WHERE  propertycategory = '$propertycategory'" ;


if(isset($_POST['go']))
{



if( ($propertycategory != "") ){
    if($result1 = mysql_query($sql1) or die(mysql_error())){
    $x='0';
        
                
                while($row = mysql_fetch_array($result1))
                {
                $x++;
                      

                    echo' <div>';
                          // echo ' <strong><a href="" >property Name:</strong>'. $row['propertyname'] .'</a><br>';
 echo' <br>'; echo  '
                        <div class="thumbnail">
                                            <div class="image-wrap">
                                                <img src="admin/'.$row['location'].'" alt="001" title="001" width="250px" height="100px"/>                
                                            </div>
                                            <div class="meta group">
                                                <h4><a href="" title="Section shortcodes &amp; sticky posts!">Section </a></h4>
                                                <p class="date"><img src="images/clock.png" title="Date" alt="Date" />'. $row['propertyname'] .'</p>
                                                <p class="comments"><img src="images/comments-small.png" title="Comments" alt="Comments" /><span><a href="#" title="Comment on Section shortcodes &amp; sticky posts!">No comments</a></span></p>
                                            </div>
                                        </div>

<div class="the-content">
                                            <h3 class="title">'. $row['propertyname'] .'</h3>
                                            <p>

                                           '. $row['propertycategory'] .''. $row['propertyprice'] .'
                                            </p>
                                            
                                            <!-- <a href="#" class="more-link">[...]</a>             -->
                                        </div>




'
                            
                            ;
                             echo '<p><strong>property Name: </strong><a href="#">'. $row['propertyname'] .'</a></p>';
                           echo' <br>';
                             echo '<p><strong>property Category: </strong><a href="#">'. $row['propertycategory'] .'</a></p>';
                             echo' <br>';
                             echo '<p><strong> propertyprice: </strong><a href="#">'. $row['propertyprice'] .'</a></p>';
                               
                            echo '</div>';
                    echo '</div> ';
                }
                
                
            }
    }
//-------------------------------------------------bfrom------------------------------------------------------------------------------------------



    
//----------------------------------else --------------------------------------------------------------------------------------------------
else{
//echo "<table >" ;
                echo "<tr ><td><img src='' > Un-match your selection  choice </td> </tr>";
                echo '</table>';
                echo '
             ';
}


//------------------------------------------------------------------------------------------------------------------------------------------------

}
mysql_close();
?> 
                                
                

				                       
				                  
				                </div>
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
				        <!-- END CONTENT -->
				        <!-- START SIDEBAR -->
				        <div class="sidebar group">
				            <div class="widget-first widget text-image">
                                <h3>Responsive and stdgdgdsddsgrong layout</h3>
                                <div class="text-image" style="text-align:left"><img src="images/resp1.png" alt="Responsive and strong layout" /></div>
                            </div>
                            
                            <div class="widget-last widget widget_text">
                                <h3>Get support</h3>
                                <div class="textwidget">
                                    <p>
                                   
                                    </p>
                                </div>
                            </div>
				            <div class="widget-first widget text-image">
				                <h3>Responsive and strong layout</h3>
				                <div class="text-image" style="text-align:left"><img src="images/resp1.png" alt="Responsive and strong layout" /></div>
				            </div>
				            
				            <div class="widget-last widget widget_text">
				                <h3>Get support</h3>
				                <div class="textwidget">
				                    <p>
                                    
                                    </p>
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
				        
				        <div class="widget-first widget recent-posts">
				            <h3>Recent Posts</h3>
				            <div class="recent-post group">
				                <div class="hentry-post group">
				                    <div class="thumb-img"><img src="images/articles/001-55x55.jpg" alt="001" title="001" /></div>
				                    <div class="text">
				                        <a href="#" title="Section shortcodes &amp; sticky posts!" class="title">Section shortcodes &amp; sticky posts!</a>
				                        <p class="post-date">July 24, 2014</p>
				                    </div>
				                </div>
				                <div class="hentry-post group">
				                    <div class="thumb-img"><img src="images/articles/003-55x55_a.jpg" alt="003" title="003" /></div>
				                    <div class="text">
				                        <a href="#" title="Nice &amp; Clean. The best for your blog!" class="title">Nice &amp; Clean. The best for your blog!</a>
				                        <p class="post-date">July 24, 2014</p>
				                    </div>
				                </div>
				            </div>
				        </div>
				        
				        <div id="last-tweets" class="widget last-tweets">
				            <h3>Old News</h3>
				            <div class="list-tweets"></div>
				            <script type="text/javascript">
				                // jQuery(function($){
				                // 	$('#last-tweets .list-tweets').tweetable({
				                // 		listClass: 'tweets-widget',
				                // 		username: 'envato', 
				                // 		time: true, 
				                // 		limit: 2, 
				                // 		replies: true
				                // 	});
				                // });
				            </script>
				        </div>
				        
				        <div class="widget contact-info">
				            <h3>Get in touch</h3>
				            <div class="sidebar-nav">
				                <ul>
				                    <li>
				                        <i class="icon-map-marker" style="color:#979797;font-size:20pxpx"></i> Location: Colombo
				                    </li>
				                    <li>
				                        <i class="icon-info-sign" style="color:#979797;font-size:20pxpx"></i> Phone: +94 071 xxxxxxx
				                    </li>
				                    <li>
				                        <i class="icon-print" style="color:#979797;font-size:20pxpx"></i> Fax: +94 011 xxxxxxx
				                    </li>
				                    <li>
				                        <i class="icon-envelope" style="color:#979797;font-size:20pxpx"></i> Email: xxxxxx@xxx.com
				                    </li>
				                </ul>
				            </div>
				        </div>
				        			        
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
                            <a href="https://www.facebook.com" class="socials-small facebook-small" title="Facebook">facebook</a>
                            <a href="https://www.rss.com" class="socials-small rss-small" title="Rss">rss</a>
                            <a href="https://www.twitter.com" class="socials-small twitter-small" title="Twitter">twitter</a>
                            <a href="https://www.flickr.com" class="socials-small flickr-small" title="Flickr">flickr</a>
                            <a href="https://www.skype.com" class="socials-small skype-small" title="Skype">skype</a>
                            <a href="https://www.google.com" class="socials-small google-small" title="Google">google</a>
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