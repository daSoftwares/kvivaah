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


<?php if($errorCode !== MSG_ERROR_CODE){?>
<!-- Modal 1-->
<div class="modal fade" id="userFull1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Full Length 1</h4>
            </div>
            <div class="modal-body" align="center">
                <img src="<?php echo $userFull1;?>" class="img-responsive" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="userFull2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Full Length 2</h4>
            </div>
            <div class="modal-body" align="center">
                <p>
                    <img src="<?php echo $userFull2;?>"  class="img-responsive" >
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php }?>