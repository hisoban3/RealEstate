<?php
	// No direct access to this file 
	// define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
	// if(!IS_AJAX) {
	// 	die('Restricted access');
	// }

?>
<body id="theme-default" class="full_block">

<div id="login_page">
	<div class="login_container">
		<div class="login_header black_w">
			<ul class="login_branding">
				<li>
				<div class="logo_small">
					<a href="../index.php"><img src="../images/logo.png" width="86" height="52" alt="bingo"></a>
				</div>
				<span><strong>Real Estate Business</strong></span>
				</li>
				<li class="right go_to"><a href="../index.php" title="Go to Main Site" class="home">Go To Main Site</a></li>
			</ul>
		</div>
		<form action="includes/login.php" method="post">
			<div class="login_form">
			
                           
			
				<h3 class="black_gel"> Login</h3>
				<ul>
					<li class="login_user">
					<input name="luname" value="" type="text">
					</li>
					<li class="login_pass">
					<input name="lpw" type="password" value="">
					</li>
				</ul>
			</div> 
			<input class="login_btn black_w" name="signup" value="Login" type="submit">
			<ul class="login_opt_link">
				<li><a href="forgot-pass.html">Forgot Password?</a></li>
				<li class="remember_me right">
				<input name="apdiv" class="rem_me" type="checkbox" value="checked">
				Remember Me</li>
			</ul>
		</form>
	</div>
</div>
</body>
</html>