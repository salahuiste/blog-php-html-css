<?php
session_start();
$title='';
if(empty($_SESSION['allowed']) OR $_SESSION['allowed']=='non' ) {
	$title='Redirecting';
	header('Location: login.php');
}
else {
	$title="Admin Page";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript">
		var x_position=0,text,the_timer;
		function set_timer(){
			text=document.getElementById("welcomeM");
			x_position=x_position+1;
			text.style.left=x_position+"px";
			the_timer=setTimeout(set_timer,20);

		}
	</script>
</head>
<body onload="set_timer()">
		<?php include('includes/header.php'); ?>
		<div >
			<p id="welcomeM" style="position: absolute;left:0px; font-size:1.5em;">Welcome to the Admin Area</p>
		</div>
</body>
</html>