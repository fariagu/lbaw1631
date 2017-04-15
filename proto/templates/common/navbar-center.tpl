<ul class="nav navbar-nav">
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="{$BASE_URL}">Home</a></li>
	<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="{$BASE_URL}pages/posts/new-question.php">Post a question</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li data-toggle="collapse" data-target=".navbar-collapse.in" class="dropdown">
        <a href="#" class="dropbtn">
             <span class="glyphicon glyphicon-user"></span>Username
        </a>
        <div class="dropdown-content">
            <a href="{$BASE_URL}pages/user/profile.php">Your Profile</a>
            <a href="{$BASE_URL}pages/user/edit-profile.php">Edit Info</a>
            <a href="{$BASE_URL}actions/user/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
        </div>
    </li>
</ul>