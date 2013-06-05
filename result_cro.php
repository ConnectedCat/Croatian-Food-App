<?php
	include('header.php');
?>

	<img src="results/cro/<?php echo $_SESSION['result']; ?>.png">
	<span id="printout">Za cijeli profil, uzmite isprint.</span>
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