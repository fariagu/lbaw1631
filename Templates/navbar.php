<?php if(0) {  ?>
	
		<?php include('navbar-left.php'); ?>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../register"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
			<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
		</ul>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
	
	<?php }else { ?>
	
		<?php include('navbar-left.php'); ?>
		
		<ul class="nav navbar-nav">
		  <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="/home">Home</a></li>
		  <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../post">Post a question</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="../profile">
                    <span class="glyphicon glyphicon-user"></span>Profile
                </a>
            </li>
			<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
		</ul>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
		
<?php } ?>