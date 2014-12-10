<div id="container">
	<div id="header" class="black_gel">
		
		<div class="header_right">
			
			<div id="user_nav">
				<ul>
					<li class="user_thumb"><a href="#"><span class="icon"><img src="photos/admin.png" width="30" height="30" alt="User"></span></a></li>
					<li class="user_info"><span class="user_name">
					<?php
                        error_reporting(E_ALL ^ E_DEPRECATED);
                            if ($_SESSION['USR_NAME']){
                                echo "Hi ".$_SESSION['USR_NAME'].",";
                            }
                    ?>
					</span><span><a href="#">Profile</a> &#124; <a href="#">Settings</a> &#124;</span></li>
					<li class="logout"><a href="includes/logout.php"><span class="icon"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="page_title gray_sai">
		<a href="dashboard.php"><span class="title_icon"><span class="computer_imac"></span></span></a>
		<h3>One Asia Asset Management</h3>
		<div class="top_search">
			<form action="#" method="post">
				<ul id="search_box">
					<li>
					<input name="" type="text" class="search_input" id="suggest1" placeholder="Search...">
					</li>
					<li>
					<input name="" type="submit" value="" class="search_btn">
					</li>
				</ul>
			</form>
		</div>
	</div>
	<div class="switch_bar">
		<ul>
			<li>
			<a href=""><span class="stats_icon current_work_sl"></span><span class="label">Admin</span></a>
			</li>
			<li><a href="view-user.php"> <span class="stats_icon user_sl"></span><span class="label"> Users</span></a>
			
			</li>
			<li><a href="view-property.php"><span class="stats_icon administrative_docs_sl"></span><span class="label">Property</span></a></li>
			<li><a href=""><span class="stats_icon calendar_sl"></span><span class="label">Events</span></a></li>
			<li><a href=""><span class="stats_icon finished_work_sl"></span><span class="label">Mail</span></a></li>
			<li><a href=""><span class="stats_icon archives_sl"></span><span class="label">SMS</span></a></li>
			<li><a href=""><span class="stats_icon bank_sl"></span><span class="label">Payments</span></a></li>
			<li><a href=""><span class="stats_icon category_sl"></span><span class="label">Reports</span></a></li>
		</ul>
	</div>