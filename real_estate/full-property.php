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
                
                <!-- END HEADER -->
                
                <!-- START PRIMARY -->
				<div id="primary" class="sidebar-right">
				    <div class="inner group">
				        <!-- START CONTENT -->
				        <div id="content-blog" class="content group"> <div>
						
			<?php
                 require_once 'php/config.php';

                echo '<form class="select" action="" method="post">';
                echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select   name="propertycategory" >';
                echo '<option value="">-----ALL Property Type -----</option>-->';
                $query="SELECT propertycategory FROM property_category";
                $result = mysql_query($query) or die(mysql_error());
                while ($row = mysql_fetch_assoc($result))  
                {  
                echo '<option value="' . $row['propertycategory'] . '"> ' . $row['propertycategory'] .'</option>'; 
        
                }
                echo '</select>'; 

                 echo '&nbsp; &nbsp; <select   name="city" >';
                echo '<option value="">-----ALL Property City -----</option>-->';
                $query="SELECT city FROM property";
                $result = mysql_query($query) or die(mysql_error());
                while ($row = mysql_fetch_assoc($result))  
                {  
                echo '<option value="' . $row['city'] . '"> ' . $row['city'] .'</option>'; 
        
                }
                echo '</select>'; 
               
                echo'&nbsp; &nbsp; &nbsp; &nbsp; <input type="submit"   value="Search"  name="go"/>';
                echo '</form>';
         
            ?></div>
                        
                            
                                         <?php
                        error_reporting(E_ALL ^ E_NOTICE);

                   $propertyname = $_POST['propertyname'];
                $propertycategory = $_POST['propertycategory'];
                   $propertyprice = $_POST['propertyprice'];
                     $description = $_POST['description'];
                        $streetno = $_POST['streetno'];
                   $streetaddress = $_POST['streetaddress'];
                            $city = $_POST['city'];
               $sql1 = "SELECT * FROM property WHERE  propertycategory = '$propertycategory'" ;


             if(isset($_POST['go'])){



           if( ($propertycategory != "") ){
                if($result1 = mysql_query($sql1) or die(mysql_error())){
                     $x='0';
        
                
                while($row = mysql_fetch_array($result1))
                {
                $x++;
                      

                    echo' <div>';

                          // echo ' <strong><a href="" >property Name:</strong>'. $row['propertyname'] .'</a><br>';
                    echo' <br>'; echo  '
 
                            <div class="sticky hentry hentry-post blog-big group">
				                <!-- post featured & title -->
				                <div class="thumbnail">
				                    <!-- post title -->
				                    <h2 class="post-title"><a href="">'. $row['propertyname'] .'</a></h2>
				                    <!-- post featured -->
				                    <div class="image-wrap">
				                        <img src="admin/'.$row['location'].'" alt="001" title="001" />        
				                    </div>
				                    <p class="date">
				                        <span class="month">Sep</span>
				                        <span class="day">24</span>
				                    </p>
				                </div>
								
								<div class="meta group">
				                    <p class="author"><span>by <a href="#" title="Posts by Nicola Mustone" rel="author">'. $row['city'] .'</a></span></p>
				                    <p class="categories"><span>In: <a href="#" title="View all posts in Happyness" rel="category tag">'. $row['propertycategory'] .'</a><a href="#" title="View all posts in Romantic Vintage" rel="category tag"></a></span></p>
				                    <p class="comments"><span><a href="article.html#respond" title="Comment on Section shortcodes &amp; sticky posts!">'. $row['propertyprice'] .'</a></span></p>
				                </div>
								
								
								
								<div class="work-skillsdate">
				                                    <p class="skills"><span class="label">City:</span> '. $row['city'] .'</p>
				                                    <p class="workdate"><span class="label">Agent:</span> 0772715862</p>
				                                    <p class="workdate"><span class="label">Year:</span> 2014</p>
				                </div>
								
								<div class="the-content group">
				                    <p>'. $row['description'] .'</p>
				                    <p>Lorem ipsum dolor sit at <strong>morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas.</p>
				                    <p>In facilisis <strong>sit amet semper</strong> sem Nullam nec risus purus.</p>
				                    <p><a href="single-property.php?id=' . $row['propertyid'] . '" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→ Read more</a></p>
				                </div>
				                <div class="clear"></div>' ;
                           
                               
                            echo '</div>';
                    echo '</div> ';
                }
                
                
            }
    }
else{
                echo '
             ';
}


//------------------------------------------------------------------------------------------------------------------------------------------------

}
mysql_close();
?> 

				            
				            <div class="sticky hentry hentry-post blog-big group">
                                <!-- post featured & title -->
                                <div class="thumbnail">
                                    <!-- post title -->
                                    <h2 class="post-title"><a href="">Property In colombo</a></h2>
                                    <!-- post featured -->
                                    <div class="image-wrap">
                                        <img src="admin/photos/fixed1.jpg" alt="001" title="001" />        
                                    </div>
                                    <p class="date">
                                        <span class="month">Sep</span>
                                        <span class="day">24</span>
                                    </p>
                                </div>
                                <!-- post meta -->
                                <div class="meta group">
                                    <p class="author"><span>by <a href="#" title="Posts by Nicola Mustone" rel="author">Nicola Mustone</a></span></p>
                                    <p class="categories"><span>In: <a href="#" title="View all posts in Happyness" rel="category tag">Happyness</a>, <a href="#" title="View all posts in Romantic Vintage" rel="category tag">Romantic Vintage</a></span></p>
                                    <p class="comments"><span><a href="article.html#respond" title="Comment on Section shortcodes &amp; sticky posts!">400,000/=</a></span></p>
                                </div>
                                <!-- post content -->
                                <div class="the-content group">
                                    <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi. Maecenas rutrum vehicula condimentum. Donec volutpat nisl ac mauris consectetur gravida.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vulputate nibh. Pellentesque habitant <strong>morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <p>In facilisis ornare arcu, sodales facilisis neque blandit ac. Ut blandit ipsum quis arcu adipiscing <strong>sit amet semper</strong> sem feugiat. Nam sed dapibus arcu. Nullam eleifend molestie lectus. Nullam nec risus purus.</p>
                                    <p><a href="article.html" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→ Read more</a></p>
                                </div>
                                <div class="clear"></div>
                            </div>
				            
				            
				            
				            <div class="general-pagination group"><a href="#" class="selected">1</a><a href="#">2</a><a href="#">&rsaquo;</a></div>
				            
				        </div>
				        <!-- END CONTENT -->
				        
                        <!-- START SIDEBAR -->
				        <div id="sidebar-blog-sidebar" class="sidebar group">
				            
				            <div class="widget-first widget recent-posts">
				                <h3>Latest Propertyes</h3>
				                <div class="recent-post group">
				                    <div class="hentry-post group">
				                        <div class="thumb-img"><img src="images/articles/001-55x55.png" alt="001" title="001" /></div>
				                        <div class="text">
				                            <a href="article.html" title="Section shortcodes &amp; sticky posts!" class="title">Section shortcodes &amp; sticky posts!</a>
				                            <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
				                            <a class="read-more" href="article.html">&rarr; Read More</a>
				                        </div>
				                    </div>
									
				                </div>
				            </div>
				            
				            <div id="last-tweets-2" class="widget last-tweets">
				                <h3>Last Tweets</h3>
				                <div class="list-tweets"></div>
				                <script type="text/javascript">
				                    jQuery(function($){
				                    	$('#last-tweets-2 .list-tweets').tweetable({
				                    		listClass: 'tweets-widget',
				                    		username: 'YIW', 
				                    		time: true, 
				                    		limit: 3, 
				                    		replies: true
				                    	});
				                    });
				                </script>
				            </div>
				            
				            <div class="widget-last widget recent-comments">
				                <h3>Recent Propertyes</h3>
				                <div class="recent-post recent-comments group">
                                
				                    <div class="the-post group">
				                        <div class="avatar">
				                            <img alt="" src="images/avatar/unknow55.png" class="avatar" />   
				                        </div>
				                        <span class="author"><strong><a href="mailto:no-email@i-am-anonymous.not">eduard</a></strong> in</span> 
				                        <a class="title" href="article.html">Nice &amp; Clean. The best for your blog!</a>
				                        <p class="comment">
                                            hi <a class="goto" href="article.html">&#187;</a>
                                        </p>
				                    </div>
                                    
				                    <div class="the-post group">
				                        <div class="avatar">
				                            <img alt="" src="images/avatar/nicola55.jpeg" class="avatar" />   
				                        </div>
				                        <span class="author"><strong><a href="mailto:nicola@yopmail.com">nicola</a></strong> in</span> 
				                        <a class="title" href="article.html">This is the title of the first article. Enjoy it.</a>
				                        <p class="comment">
				                            While i’m the author of the post. My comment template is different,... <a class="goto" href="article.html">&#187;</a>
				                        </p>
				                    </div>
                                    
				                    <div class="the-post group">
				                        <div class="avatar">
				                            <img alt="" src="images/avatar/unknow55.png" class="avatar" />   
				                        </div>
				                        <span class="author"><strong><a href="mailto:no-email@i-am-anonymous.not">Anonymous</a></strong> in</span> 
				                        <a class="title" href="article.html">This is the title of the first article. Enjoy it.</a>
				                        <p class="comment">
				                            Hi all, i’m a guest and this is the guest’s awesome comments... <a class="goto" href="article.html">&#187;</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
				            
				        </div>
				        <!-- END SIDEBAR -->
                        
				    </div>
				</div>
				<!-- END PRIMARY -->
								
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