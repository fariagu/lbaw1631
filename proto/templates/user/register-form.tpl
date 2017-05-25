<div class="enter-info">
    <h1>Create New Account</h1>
    <form class="form-horizontal" id="register-form" action="{$BASE_URL}actions/user/register.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" value="{$FORM_VALUES.username}" autofocus>
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" value="">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="pwd2">Confirm Password:</label>
            <div class="col-sm-10">
                <input name="confirmpassword" type="password" class="form-control" id="pwd2" placeholder="Enter password" value="">
            </div>
      </div>
	  <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="{$FORM_VALUES.email}">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">First name:</label>
            <div class="col-sm-10">
                <input name="firstname" type="text" class="form-control" id="firstName" placeholder="Enter your first name" value="{$FORM_VALUES.firstname}">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-2" for="lastName">Last name:</label>
            <div class="col-sm-10">
                <input name="lastname" type="text" class="form-control" id="lastName" placeholder="Enter your last name" value="{$FORM_VALUES.lastname}">
            </div>
      </div>
      <div class="form-group" id="picButton">
            <label class="control-label col-sm-2" for="profilePic">Profile Picture:</label>
            <input name="photo" type="file" name="image" id="profilePic"/>
      </div>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
      </div>
    </form>
</div>