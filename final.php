<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>
<div class="main">
<h1>You are done!</h1>

<div class="starttest">
	<p>Congratulations! You have just completed the test.</p>
	<p>Final Score: 

		<?php 
		if (isset($_SESSION['score'])) {
			echo $_SESSION['score'];
			unset($_SESSION['score']);
		}
		 ?>

	</p>

	<a href="viewans.php">View Ans</a>
	<a href="starttest.php">Start Again</a>
</div>
	
  </div>
<?php include 'inc/footer.php'; ?>