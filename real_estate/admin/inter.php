<?php
	session_start();
	$_SESSION['u']='';
	if($_SESSION['u']=='') {
?>
	<script>
	self.location='index.php'
	</script>
<?php
	}
?>