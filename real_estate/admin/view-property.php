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
						<h6>View property List</h6>
					</div>
					<div class="widget_content">
						<h3>All property</h3>
						
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
								 Property Image 
							</th>
							<th>
								Property name
							</th>
							<th>
								property category
							</th>
							<th>
								Address
							</th>
							
							<th>
								 description
							</th>
							<th>
								 propertyprice
							</th>
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						
						<?php
						$result  = mysql_query("SELECT * FROM property ORDER BY propertyid DESC");
						$counter = $result;
						$class   = '';
						//if($perm==1)$class='editable';
						while($row=mysql_fetch_array($result)){
							echo '<tr class="gradeA" id="'.$row['propertyid'].'" style="cursor:pointer;">
							<td class="" href="'.$row['propertyid'].'">'.'</td>
							<td class="" href="'.$row['propertyname'].'">'.$row['propertyid'].'</td>
							<td class="center portfolio">
							<a href="'.$row['location'].'" rel="gallery"><img src="'.$row['location'].'" width="20" height="20" alt=""/></a>
							</td>
							<td class="'.$class.'" style="cursor:pointer;" field="propertyname">'.$row['propertyname'].'</td>
							<td class="'.$class.'" style="cursor:pointer;" field="propertycategory">'.$row['propertycategory'].'</td>
							<td class="'.$class.'" style="cursor:pointer;" field="	streetno">'.$row['streetno'].','.$row['streetaddress'].',<br>'.$row['city'].'</td>
						    <td class="'.$class.'" style="cursor:pointer;" field="description">'.$row['description'].'</td>
							<td class="'.$class.'" style="cursor:pointer;" field="propertyprice">'.$row['propertyprice'].'</td>
							<td class="center"><span><a class="action-icons c-edit" href="edit.php?id=' . $row['propertyid'] . '" title="Edit">Edit</a>
							</span><span><a class="action-icons c-delete" href="delete.php?id=' . $row['propertyid'] . '" title="delete">Delete</a></span><span>
							</td>';
						'</tr>';
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
								 Property Image 
							</th>
							<th>
								Property name
							</th>
							<th>
								property category
							</th>
							<th>
								Address
							</th>
							
							<th>
								 description
							</th>
							<th>
								 propertyprice
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