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
						<h6>ADD  Property</h6>
					</div>
					<div class="widget_content">
						<form id="signupform" autocomplete="off" method="post" action="insert-property.php" enctype="multipart/form-data" class="form_container left_label">
							<ul>
							   
							
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="name"> Property Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="propertyname" id="name" type="text" tabindex="1" class="required limiter mid"/>
									</div>
								</div>
								</li>
								 <li>
								<div class="form_grid_12">
									<label class="field_title">Property Category</label>
									<div class="form_input">
										<div class="form_grid_4 alpha">
											<div class="form_grid_6 alpha">
										<select data-placeholder="Property Category" style=" width:300px" name="propertycategory" class="chzn-select" tabindex="13">
						                <?php
                                             
                                        $selb=mysql_query("select * from property_category ");
                                        while($rb=mysql_fetch_array($selb)) {
                                        ?>
                                        <option value="<?php echo $rb['propertycategory']; ?>"><?php echo $rb['propertycategory']; ?></option>
                                        <?php
                                                                            }
                                        ?>     
										</select>
									</div>
											
									</div>
										
										
									<span class="clear"></span>
									</div>
								</div>
								</li>
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title">Description<span class="label_intro">Auto Grow Textarea</span></label>
									<div class="form_input">
										<textarea name="description" class="input_grow" cols="50" rows="5" tabindex="5"></textarea>
									</div>
								</div>
								</li>
								

								<li>
								<div class="form_grid_12">
									<label class="field_title">Property Image</label>
									<div class="form_input">
										<input name="image" type="file" >
									</div>
								</div>
								</li>
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" >property Price<span class="req">*</span></label>
									<div class="form_input">
									<input type="text" name="propertyprice" maxlength="14" class="required limiter mid"/>
										
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