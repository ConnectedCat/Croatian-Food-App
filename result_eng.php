<?php
	include('header.php');
?>

	<img src="results/eng/<?php echo $_SESSION['result']; ?>.png">
	<span id="printout">For the full profile, take the print out.</span>
	<span id="finish">finish</span>
	<script src="js/final.js"></script>
<?php
	include('footer.php');
	
	session_destroy();
?>