<?php $isSessionPresent = $this->Session->read('userInfo') ? true : false;
$userId = $isSessionPresent ? $this->Session->read('userInfo')->id : NULL;
?>

 <?php if($errorMsg = $this->Session->flash()){?>
     <div class="alert alert-danger"><b>Oops! Something went wrong.</b> <?php echo $errorMsg;?> </div>
 <?php }?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $this->webroot;?>">KV</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php if(!$isSessionPresent){?>
        <li><a href="<?php echo $this->webroot;?>index/registerForFree">Register For Free</a></li>
        <?php }?>

		<li><a href="#">Advertise With Us</a></li>
		<!-- <li><a href="<?php echo $this->webroot;?>index/successStories">Success Stories</a></li>-->
                <li><a href="<?php echo $this->webroot;?>users/userProfile/<?php echo DEMO_USER_PROFILE;?>">Demo Profile</a></li>
       </ul>
     
      <ul class="nav navbar-nav navbar-right">
<?php if($isSessionPresent){?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Action <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $this->webroot;?>users/editProfile">Edit Profile</a></li>
            <li><a href="<?php echo $this->webroot;?>users/userProfile/<?php echo $userId;?>">View Profile</a></li>
            <li><a href="<?php echo $this->webroot;?>users/changePassword">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $this->webroot;?>index/doLogout">Logout</a></li>
          </ul>
        </li>
 <?php }?>       
<?php if(!$isSessionPresent){?>
        <li class="dropdown">
                     <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form   method="post" action="<?php echo $this->webroot;?>/index/doLogin" id="loginForm">
                                    <div class="form-group">
                                       <label class="sr-only" for="email">Email address</label>
                                       <input type="text" class="form-control" name="userName" id="email" placeholder="Registered Mobile No." required="">
                                    </div>
                                    <div class="form-group">
                                       <label class="sr-only" for="password">Password</label>
                                       <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                                    </div>
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" id="rememberMe"> Remember me
                                       </label>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <!--<li class="divider"></li>
                        <li>
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                        </li>-->
                     </ul>
                  </li>
                  <?php }?>
      </ul>	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>