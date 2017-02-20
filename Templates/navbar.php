<?php if(true) { ?>
	
	 <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">LBQ&AW</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
		<form class="navbar-form navbar-right">
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	  </div>
	</nav>
	
	<?php }else { ?>
	
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">LBQ&AW</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">Post a question</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Profile</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		<form class="navbar-form navbar-right">
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	  </div>
	</nav>
	
	<?php } ?>
