<?php
	include('header.php');
?>

	<img src="results/cro/<?php echo $_SESSION['result']; ?>.png">
	<span id="printout">Za cijeli profil, uzmite isprint.</span>
	<span id="finish">završi</span>
	<script src="js/final.js"></script>
<?php
	include('footer.php');
	
	session_destroy();
?>