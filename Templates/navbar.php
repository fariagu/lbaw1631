<?php if(1) {  ?>
	
		<?php include('navbar-left.php'); ?>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
		</ul>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
	
	<?php }else { ?>
	
		<?php include('navbar-left.php'); ?>
		
		<ul class="nav navbar-nav">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="post.php">Post a question</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
		</ul>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
	
	<?php } ?>
