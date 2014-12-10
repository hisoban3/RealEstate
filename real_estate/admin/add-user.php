<?php 
	require('includes/header.php');
	require('includes/mainmenu.php');
	require('includes/leftmenu.php');
	require_once 'includes/connection.php';
?>
<div id="container">
	
	<div id="content">
		<div class="grid_container">
			<div class="grid_12">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>ADD  User</h6>
					</div>
					<div class="widget_content">
						<form id="signupform" autocomplete="off" method="post" action="insert-user.php"  class="form_container left_label">
							<ul>
								<li>
									<div class="form_grid_12">
										<label class="field_title">Name</label>
										<div class="form_input">
											<div class="form_grid_6 alpha">
												<input name="firstname" type="text"/>
												<span class=" label_intro">First Name</span>
											</div>
											<div class="form_grid_6 ">
												<input name="lastname" type="text"/>
												<span class=" label_intro">Last Name</span>
											</div>
											<span class="clear"></span>
										</div>
									</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" id="lusername" for="username">Username<span class="req">*</span></label>
									<div class="form_input">
										<input id="username" name="username" type="text"  maxlength="50" class="large"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" id="lpassword" for="password">Password<span class="req">*</span></label>
									<div class="form_input">
										<input id="password" name="password" type="password" maxlength="50" value="" class="large"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" id="lpassword_confirm" for="password_confirm">Confirm Password<span class="req">*</span></label>
									<div class="form_input">
										<input id="password_confirm" name="password_confirm" type="password" maxlength="50" value="" class="large"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" id="lemail" for="email">Email Address<span class="req">*</span></label>
									<div class="form_input">
										<input id="email" name="email" type="text" value="" maxlength="150" class="large"/>
									</div>
								</div>
								</li>
								
								<li>
								
							   <div class="form_grid_12">
									<label class="field_title">Contact Number</label>
									<div class="form_input">
										<!-- <div class="form_grid_4"> -->
												<input name="pno" type="text" tabindex="1" maxlength="11" class="large"/>
												<!-- <span class=" label_intro">Contact Number</span> -->
										<!-- </div> -->
										<!-- <span class="clear"></span> -->
									</div>
								</div>
						        </li>
						        <li>
								<div class="form_grid_12">
									<label id="lterms" for="terms" class="field_title">I have read and accept the Terms of Use.</label>
									<div class="form_input">
										<input id="terms" type="checkbox" name="terms"/>
									</div>
								</div>
								</li>
						        <li>
								<div class="form_grid_12">
									<div class="form_input">
										<button name="submit" type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
		<span class="clear"></span>
	</div>
</div>
</body>
</html>
								
						
						
								
								
								
							   