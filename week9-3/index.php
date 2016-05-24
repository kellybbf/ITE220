<?php session_start(); ?>

<?php
if(!isset($_SESSION['username'])){
	header("location: login.php");
}
?>

<?php include("includes/header.php"); ?>

		<div class="container">
			<div class="row text-center">
				<h1>Welcome <?php echo $_SESSION['username']; ?> !</h1>
			</div>
		</div>



<?php include("includes/footer.php"); ?>