<?php session_start(); ?>
<?php		
	
	$_SESSION['results'][$_POST['currect_question']] = $_POST['answer'];	

	print_r($_SESSION['results']);
	
	
?>
