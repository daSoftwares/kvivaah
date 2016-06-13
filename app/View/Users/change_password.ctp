<?php
//debug($userInfo['UserImage']);
$userDetails = $userImages = $userProfileImg = $userFull1 = $userFull2 = NULL;

if(isset($userInfo['User']) && count($userInfo['User'])){
    $userDetails = (object)$userInfo['User'];
    
    if(isset($userInfo['UserImage']) && count($userInfo['UserImage'])){
    $userImages =  $userInfo['UserImage'];
    $userProfileImg = USER_PROFILE_HTTP_PATH.$userImages[0]['imgName'];
    $userFull1 = USER_PROFILE_HTTP_PATH.$userImages[1]['imgName'];
    $userFull2 = USER_PROFILE_HTTP_PATH.$userImages[2]['imgName'];
    }
}
//debug($userDetails);
?>
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/validationEngine.jquery.css" type="text/css"/>
<script src="<?php echo $this->webroot;?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>
<script src="<?php echo $this->webroot;?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>

<div class="row">
   <?php echo $this->element('left-ads-sidebar');?>
    
    <div class="col-md-9">
        <form id="tryitForm" class="form-horizontal" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend>Change Password</legend>
                <?php echo $this->element('alert-msg-bar');?>
                 <?php if(($errorCode !== MSG_ERROR_CODE)){?>
                    <!-- Text input-->
             
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="currentPassword">Type Current Password</label>  
                    <div class="col-md-5">
                        <input id="currentPassword" name="currentPassword" placeholder="Current Password" class="form-control input-md validate[required]"  type="password" value="">
                    </div>
                </div>
                 <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="newPassword">Type New Password</label>  
                    <div class="col-md-5">
                        <input id="newPassword" name="newPassword" placeholder="New Password" class="form-control input-md validate[required]"  type="password" value="">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="retypePassword">Retype New Password</label>  
                    <div class="col-md-5">
                        <input id="retypePassword" name="retypePassword" placeholder="Retype Password" class="form-control input-md validate[required,equals[newPassword]]"  type="password" value="">
                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-8">
                        <button type="submit" id="submit" name="submit" class="btn btn-success">Update</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                 <?php }?>
            </fieldset>
        </form>

    </div>
</div>
  <?php echo $this->element('bottom-ads-bar');?>
<script>

    $(document).ready(function() {
          // binds form submission and fields to the validation engine
        $("#tryitForm").validationEngine();


    });
</script>