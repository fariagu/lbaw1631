<div class="enter-info">
    <h1>Edit Account Info</h1>
    <form class="form-horizontal" id="register-form" action="{$BASE_URL}actions/user/edit-profile.php" method="post" enctype="multipart/form-data">
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
            <input type="file" name="photo" id="profilePic"/>
      </div>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Finish</button>
            </div>
      </div>
    </form>
</div>