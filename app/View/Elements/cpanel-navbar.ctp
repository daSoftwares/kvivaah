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
      <a class="navbar-brand" href="<?php echo $this->webroot;?>">Kayastha Vivaah</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $this->webroot;?>cpanel/adminDashboard">Dashboard</a></li>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Management<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $this->webroot;?>cpanel/allUsers">View All Users</a></li>
            <li><a href="<?php echo $this->webroot;?>#">Add New User</a></li>
           </ul>
        </li>
		<li><a href="<?php echo $this->webroot;?>index/successStories">Success Stories</a></li>
       </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Action <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $this->webroot;?>users/editUserProfile">Edit Profile</a></li>
            <li><a href="<?php echo $this->webroot;?>users/userProfile">View Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $this->webroot;?>index/doLogout">Logout</a></li>
          </ul>
        </li>
        
        
      </ul>	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>