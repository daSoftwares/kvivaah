<div class="row">
 <?php echo $this->element('left-ads-sidebar');?>

    <div class="col-md-9">
        <div class="page-header">
            <h1>Login Panel <small>A Super Admin Login</small></h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form   method="post" action="<?php echo $this->webroot;?>/index/adminLogin" id="loginForm">
                    <div class="form-group">
                        <label class="sr-only" for="email">User Name</label>
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
    </div>
</div>
 <?php echo $this->element('bottom-ads-bar');?>