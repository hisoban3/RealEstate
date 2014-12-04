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
						<span class="h_icon blocks_images"></span>
						<h6>View User List</h6>
					</div>
					<div class="widget_content">
						<h3>All User</h3>
						
						<table class="display" id="action_tbl">
						<thead>
						<tr>
							<th class="center">
								<input name="checkbox" type="checkbox" value="" class="checkall">
							</th>
							<th>
								 Id
							</th>
							<th>
								 FirstName
							</th>
							<th>
								Last Name
							</th>
							<th>
								Email 
							</th>
							<th>
								Phone
							</th>
							<th>
								Username
							</th>
							
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						
						<?php
							$result  = mysql_query("SELECT * FROM login");
							$counter = 1;
							$class   = '';
							//if($perm==1)$class='editable';
							while($row=mysql_fetch_array($result)){
								echo '<tr class="gradeA" id="'.$row['id'].'" style="cursor:pointer;">
								
								<td class="" href="'.$row['id'].'">'.'</td>
								<td class="" href="'.$row['fname'].'">'.$row['id'].'</td>
								
								<td class="'.$class.'" style="cursor:pointer;" field="firstname">'.$row['fname'].'</td>
								
								<td class="'.$class.'" style="cursor:pointer;" field="lname">'.$row['lname'].'</td>
							
								<td class="'.$class.'" style="cursor:pointer;" field="contact_no">'.$row['email'].'</td>
								<td class="'.$class.'" style="cursor:pointer;" field="contact_no">'.$row['pno'].'</td>
							
									
								<td class="'.$class.'" style="cursor:pointer;" field="contact_no">'.$row['login_username'].'</td>
								
								<td class="center"><span><a class="action-icons c-edit" href="?id=' . $row['id'] .
								'" title="Edit">Edit</a></span><span><a class="action-icons c-delete" href="delete-owner.php?id=' .
								$row['id'] . '" title="delete">Delete</a></span><span><a class="action-icons c-approve" href="#" title="Approve">Approve</a>
								</span><span></td>';'</tr>';
							}
					    ?>	
						</tbody>
						<tfoot>
						<tr>
							<th class="center">
								<input name="checkbox" type="checkbox" value="" class="checkall">
							</th>
							<th>
								 Id
							</th>
							<th>
								 FirstName
							</th>
							<th>
								Last Name
							</th>
							<th>
								Email
							</th>
							<th>
								Phone
							</th>
							<th>
								 User Name
							</th>
							
							<th>
								 Action
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		<span class="clear"></span>
	</div>
</div>
</body>
</html>