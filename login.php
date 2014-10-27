<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<div class="container">
    <div class="row">
      <div class="main">
          <h3 style="color:#65aeee;">Please Log In or <a href="index.php">Sign Up</a></h3>
          <!-- <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <button class="btn btn-lg btn-primary btn-block ladda-button" data-style="zoom-in" >Facebook</button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <button class="btn btn-lg btn-info btn-block ladda-button" data-style="zoom-in" >Google</button>
              </div>
          </div>
          <div class="login-or">
              <hr class="hr-or">
              <span class="span-or">or</span>
          </div> -->
          <form role="form" action="components/login-process.php" method="post" name="login">
              <div class="form-group">
                  <label for="inputUsernameEmail">Username or email</label>
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
          </form>
        </div>
    </div>
</div>