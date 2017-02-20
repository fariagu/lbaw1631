<?php if(0) { ?>
	
	 <nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid">
        <div class="navbar-header">
		<a class="navbar-brand" href="#menu-toggle" id="menu-toggle">Topics</a>
        </div>
		<div class="navbar-header" id="logo">
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
	
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid">
        <div class="navbar-header">
		<a class="navbar-brand" href="#menu-toggle" id="menu-toggle">Topics</a>
        </div>
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">LBQ&AW</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Post a question</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
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
