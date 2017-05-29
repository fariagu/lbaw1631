<div class="enter-info">
    <form class="form-horizontal" id="login-form" action="{$BASE_URL}actions/user/login.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" autofocus>
                </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
          </div>
          <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
          </div>
    </form>
	{if $ERROR_MESSAGES}
		<div class="alert alert-info">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Authentication error!</strong>   {$ERROR_MESSAGES}
		</div>
	{/if}
</div>
