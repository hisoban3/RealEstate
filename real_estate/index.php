<?php
	session_start();
	// error_reporting(E_ALL ^ E_DEPRECATED);
	require_once('header.php');
?>

    <!-- Validation -->

    <script type="text/javascript" language="javascript">
        function uspvalidation() {   
            window.event.returnValue = false;
            if((checkuname()) && (checkpw())) {
                window.event.returnValue = true;
            }
            
        }
        function checkuname() {
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
        function checkpw() {
            var pass= document.getElementById("lpw").value;
            
            if((pass== null)||(pass == "")) {
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
                        
            <?php
                if(isset($_SESSION['USR_NAME'])) {

                    echo "<div align='right'><a href='admin/dashboard.php'>Hi ".$_SESSION['USR_NAME'].",</a><br>";
                    echo " <a href='php/logout.php'> <input type='submit' name='submit' value='Logout' </a></div>";

                } else {

                    echo "<div id='sidebar-header' class='group' align='right'>
                            <form action='admin/includes/login.php'>
                                User name: <input type='text' name='luname' id='luname'><br>
                                Password: <input type='password' name='lpw' id='lpw'><br>
                                <input type='submit' name='submit' value='Login' onclick='uspvalidation();'>"; ?>
                                <input type='button' name='signup' value='Sign up' onClick='window.location.href="add_user.php"'>
                            <?php echo "</form>
                          </div>";
                    }
            ?>

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
				<div id="slider-flexslider" class="slider flexslider" style="width: 1200px; height: 400px;">
				    <ul class="slides">
				        <li>
				            <img src="images/slider-flex/0018.jpg" alt="0018" title="0018" />
				            <div class="slider-caption caption-right">
				                <h2>HOMES FOR SALE</h2>
				                <h4>One Asia Asset Management</h4><br>
				                <p>See single-family homes, condos, town homes - even homes not yet on the market, such as pre-foreclosures.</p>
				                <p>&nbsp;</p>
				                <span class="special-font" style="font-size:24px;">prices from 		
				                <span style="font-size: 50px;">Rs. 10,00000</span></span>
				            </div>
				        </li>
				        <li>
				            <img src="images/slider-flex/0031.jpg" alt="0031" title="0031" />
				            <div class="slider-caption caption-right">
				                <h2>HOME DESIGN IDEAS</h2>
				                <h4>One Asia Asset Management</h4><br>
				                <p>Browse more than 300,000 photos of kitchens, bathrooms, outdoor spaces and more – organized by space, style, cost and color.</p>
				            </div>
				        </li>
				        <li>
				            <img src="images/slider-flex/0033.jpg" alt="003" title="003" />
				            <div class="slider-caption caption-right">
				                <h2>MORTGAGES</h2>
				                <h4>One Asia Asset Management</h4><br>
				                <p>Shop for customized quotes, calculate monthly payments with mortgage calculators, get pre-approved for a mortgage by a participating lender, and more!</p>
				            </div>
				        </li>
				    </ul>
				</div>
				<script type="text/javascript">
				    jQuery(document).ready(function($){
				        $('#slider-flexslider.flexslider img.attachment-full').css('width', '1200px').css('height', '400px');
				    
				        var flex_caption_hide = function(slider) {
				            var currSlideElement = slider;
				            var caption_speed = 400;
				            var width = parseInt( $('.slider-caption', currSlideElement).outerWidth() );
				            var height = parseInt( $('.slider-caption', currSlideElement).outerHeight() );
				            
				            $('.caption-top', currSlideElement).animate({top:height*-1}, caption_speed);
				            $('.caption-bottom', currSlideElement).animate({bottom:height*-1}, caption_speed);
				            $('.caption-left', currSlideElement).animate({left:width*-1}, caption_speed);
				            $('.caption-right', currSlideElement).animate({right:width*-1}, caption_speed);
				        };
				    
				        var flex_caption_show = function(slider) {      
				            var nextSlideElement = slider;
				            var caption_speed = 400;
				            
				            $('.caption-top', nextSlideElement).animate({top:0}, caption_speed);
				            $('.caption-bottom', nextSlideElement).animate({bottom:0}, caption_speed);
				            $('.caption-left', nextSlideElement).animate({left:0}, caption_speed);
				            $('.caption-right', nextSlideElement).animate({right:0}, caption_speed);
				        };
				    
				    $('#slider-flexslider.flexslider').flexslider({
    				    animation: 'fade',
    				    slideshowSpeed: 8000,
    				    animationSpeed: 800,
    				    pauseOnAction: false,
    				    controlNav: false,
    				    directionNav: true,
    				    touch: false,
				            start   : flex_caption_show,
				            before  : flex_caption_hide,
				            after   : flex_caption_show
				        });
				    });
				</script>
				
				<!-- START PRIMARY -->
				<div id="primary" class="sidebar-left">
				    <div class="inner group">
				        <!-- START CONTENT -->
				        <div id="content-home" class="content group">
				            <div class="hentry group">
				                <div class="section blog">
				                    
				                    <h3 class="title">Latest news</h3>
				                    
				                    <div class="hentry category-romantic-vintage tag-romantic-vintage hentry-post sticky">
				                        <div class="thumbnail">
				                            <div class="image-wrap">
				                                <img src="images/articles/001-386x155.jpg" alt="001" title="001" />                
				                            </div>
				                            <div class="meta group">
				                                <h4><a href="article.html" title="Section shortcodes &amp; sticky posts!">Section shortcodes &amp; sticky posts!</a></h4>
				                                <p class="date"><img src="images/clock.png" title="Date" alt="Date" />July 24, 2014</p>
				                                <p class="comments"><img src="images/comments-small.png" title="Comments" alt="Comments" /><span><a href="#" title="Comment on Section shortcodes &amp; sticky posts!">No comments</a></span></p>
				                            </div>
				                        </div>
				                        <div class="the-content">
                                            <h3 class="title">Mortgage Pre-Approval</h3>
				                            <p>

                                            <?php
                                                require_once('php/config.php'); 
                                                $result = mysql_query("SELECT paragraph FROM home_design2 ORDER BY id DESC LIMIT 1 ");

                                                if (!$result) {
                                                    echo 'Could not run query: ' . mysql_error();
                                                    exit;
                                                }
                                                $row = mysql_fetch_row($result);

                                                echo $row[0];
                                            ?>
                                            </p>
				                            
				                            <!-- <a href="#" class="more-link">[...]</a>             -->
				                        </div>
				                    </div>
				                    
				                    <div class="clear"></div>
				                    
				                    <h4 class="other-articles">Other articles</h4>
				                    
				                    <div class="post hentry">
				                        <div class="meta group">
				                            <h4>
                                                <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                                    <?php
                                                        require_once('php/config.php'); 
                                                        $result = mysql_query("SELECT paragraph FROM home_design3_1 ORDER BY id DESC LIMIT 1 ");

                                                        if (!$result) {
                                                            echo 'Could not run query: ' . mysql_error();
                                                            exit;
                                                        }
                                                        $row = mysql_fetch_row($result);

                                                        echo $row[0];
                                                    ?>
                                                </a>
                                            </h4>
				                            <!-- <p class="date">July 24, 2014</p>
				                            <p class="comments"><span><a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">No comments</a></span></p> -->
				                        </div>
				                    </div>

				                    <div class="post hentry">
				                        <div class="meta group">
				                            <h4>
                                                <a href="#" title="Another theme by YIThemes!">
                                                    <?php
                                                        require_once('php/config.php'); 
                                                        $result = mysql_query("SELECT paragraph FROM home_design3_2 ORDER BY id DESC LIMIT 1 ");

                                                        if (!$result) {
                                                            echo 'Could not run query: ' . mysql_error();
                                                            exit;
                                                        }
                                                        $row = mysql_fetch_row($result);

                                                        echo $row[0];
                                                    ?>
                                                </a>
                                            </h4>
				                           	<!--  <p class="date">July 24, 2014</p>
				                            <p class="comments"><span><a href="#" title="Comment on Another theme by YIThemes!">No comments</a></span></p> -->
				                        </div>
				                    </div>
				                    
				                    <div class="post hentry">
				                        <div class="meta group">
				                            <h4>
                                                <a href="#" title="This is the title of the first article. Enjoy it.">
                                                <?php
                                                    require_once('php/config.php'); 
                                                    $result = mysql_query("SELECT paragraph FROM home_design3_3 ORDER BY id DESC LIMIT 1 ");

                                                    if (!$result) {
                                                        echo 'Could not run query: ' . mysql_error();
                                                        exit;
                                                    }
                                                    $row = mysql_fetch_row($result);

                                                    echo $row[0];
                                                ?>
                                                </a>
                                            </h4>
				                            <!-- <p class="date">July 24, 2014</p>
				                            <p class="comments"><span><a href="#" title="Comment on This is the title of the first article. Enjoy it.">2 comments</a></span></p> -->
				                        </div>
				                    </div>
				                    
				                    
				                    
				                    <div class="clear"></div>
				                    
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
				                <h3>Responsive and strong layout</h3>
				                <div class="text-image" style="text-align:left"><img src="images/resp1.png" alt="Responsive and strong layout" /></div>
				            </div>
				            
				            <div class="widget-last widget widget_text">
				                <h3>Get support</h3>
				                <div class="textwidget">
				                    <p>
                                    <?php
                                        require_once('php/config.php'); 
                                        $result = mysql_query("SELECT paragraph FROM home_design1 ORDER BY id DESC LIMIT 1 ");
                                        if (!$result) {
                                            echo 'Could not run query: ' . mysql_error();
                                            exit;
                                        }
                                        $row = mysql_fetch_row($result);

                                        echo $row[0];
                                    ?>
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