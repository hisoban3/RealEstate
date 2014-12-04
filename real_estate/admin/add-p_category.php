<?php 
require('includes/header.php');
require('includes/mainmenu.php');
require('includes/leftmenu.php');
require('includes/connection.php');
?>


<div id="container">
	
	<div id="content">
		<div class="grid_container">
			
			<div class="grid_12">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>ADD Property Category DETAILS</h6>
					</div>
					<div class="widget_content">
						<form id="signupform" autocomplete="off" method="post"  enctype="multipart/form-data"  action="insert-p_category.php" class="form_container left_label">
							<ul>
							   
							
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" > Property Category <span class="req">*</span></label>
									<div class="form_input">
									<input type="text" name="pcategory" maxlength="20" class="required limiter mid"/>
										
									</div>
								</div>
								</li>
								
									
								
								
								
								
								
								
								
							    <li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit"  name="submit" class="btn_small btn_blue"><span>Submit</span></button>
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