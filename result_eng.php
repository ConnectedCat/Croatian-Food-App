<?php
	include('header.php');
?>

	<img src="results/eng/<?php echo $_SESSION['result']; ?>.png">
	<span id="printout">For the full profile, take the print out.</span>
	<script>
		$(document).ready(function(){
			 setTimeout(function(){
			 	window.location.replace("index.php")
			 }, 10000);
		});
	</script>
<?php
	include('footer.php');
	
	session_destroy();
?>