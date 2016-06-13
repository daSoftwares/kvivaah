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
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/validationEngine.jquery.min.css" type="text/css"/>
<script src="<?php echo $this->webroot;?>js/jquery.validationEngine-en.min.js" type="text/javascript" charset="utf-8">
</script>
<script src="<?php echo $this->webroot;?>js/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8">
</script>

<div class="row">
   <?php echo $this->element('left-ads-sidebar');?>

    <div class="col-md-9">
        <form id="tryitForm" class="form-horizontal" method="post"  enctype="multipart/form-data">
            <fieldset>
                <!-- Form Name -->
                <legend>Edit your profile <small><a class="pull-right" href="<?php echo $this->webroot.PAGE_VIEW_PROFILE.$userDetails->id;?>" target="_blank">View Profile</a></small></legend>
                <?php echo $this->element('alert-msg-bar');?>
                 <?php if(($errorCode !== MSG_ERROR_CODE) && !empty($userDetails)){?>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userDisplayName">Full Name 
                        <span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="This name will show in profile display."></span>
                    </label>  
                    <div class="col-md-5">
                        <input id="userDisplayName" name="userDisplayName" placeholder="Saagar Saxena" class="validate[required] text-input form-control input-md" value="<?php echo $userDetails->userDisplayName;?>" type="text">
                    </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userType">User Type </label>
                    <div class="col-md-4"> 
                        <label class="radio-inline" for="userType-0">
                            <input name="userType" id="userType-0" value="<?php echo USER_TYPE_BRIDE;?>" <?php echo $userDetails->userType == USER_TYPE_BRIDE ? 'checked="checked"' :  NULL;?>  type="radio">
                            BRIDE
                        </label> 
                        <label class="radio-inline" for="userType-1">
                            <input name="userType" id="userType-1" value="<?php echo USER_TYPE_GROOM;?>" <?php echo $userDetails->userType == USER_TYPE_GROOM ? 'checked="checked"' :  NULL;?>  type="radio">
                            GROOM
                        </label>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userEmail">Email<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="This name will show in profile display."></span></label>  
                    <div class="col-md-5">
                        <input id="userEmail" name="userEmail" placeholder="saagar.saxena@gmail.com" class="validate[required,custom[email]] form-control input-md" type="text" value="<?php echo $userDetails->userEmail ;?>">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userMobile">Primary Mobile No.	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Mobile number must be 10 digit long and this will use as user id while login. All other user will contact on this given number."></span> </label>  
                    <div class="col-md-5">
                        <input id="userMobile" name="userMobile" placeholder="9157894231" class="form-control input-md"  type="text" value="<?php echo $userDetails->userMobile ;?>">
                    </div>
                </div>

                     <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userDobAndTime">User Date of birth and time	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide accurate Date and Time of birth."></span></label>  
                    <div class="col-md-5">
                        <input id="userDobAndTime" readonly name="userDobAndTime" placeholder="06/28/1988 8:51 PM" class="form-control input-md"  type="text" value="<?php echo date('m/d/Y h:i A', strtotime($userDetails->userDobAndTime));?>">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userBirthPlace">User Birth Place	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide accurate place of birth."></span></label>  
                    <div class="col-md-5">
                        <input id="userBirthPlace" name="userBirthPlace" placeholder="Nasik" class="form-control input-md"  type="text" value="<?php echo $userDetails->userBirthPlace ;?>">
                    </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="isManglik">Is user Manglik?</label>
                    <div class="col-md-4"> 
                        <label class="radio-inline" for="isManglik-0">
                            <input name="isManglik" id="isManglik-0" value="<?php echo IS_MAGNLIK_FALSE;?>" <?php echo $userDetails->isManglik  == IS_MAGNLIK_FALSE ? 'checked="checked"' :  NULL;?>  type="radio">
                            No
                        </label> 
                        <label class="radio-inline" for="isManglik-1">
                            <input name="isManglik" id="isManglik-1" value="<?php echo IS_MAGNLIK_TRUE;?>" <?php echo $userDetails->isManglik  == IS_MAGNLIK_TRUE ? 'checked="checked"' :  NULL;?>  type="radio">
                            Yes
                        </label>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="userEducation">User Highest Education	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide highest education certificate hold by user."></span></label>  
                    <div class="col-md-5">
                        <input id="userEducation" name="userEducation" placeholder="B.Tech" class="form-control input-md"  type="text" value="<?php echo $userDetails->userEducation ;?>">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="gurdianMobile">Secondary Mobile no.	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Mobile number must be 10 digit long and this will be used as second alternet number."></span></label>  
                    <div class="col-md-5">
                        <input id="gurdianMobile" name="gurdianMobile" placeholder="7908656463" class="form-control input-md"  type="text" value="<?php echo $userDetails->gurdianMobile;?>">
                    </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                    <label class="col-md-4 control-label" for="profilePicture">Profile Picture</label>
                    <div class="col-md-4">
                        <input id="profilePicture" name="profilePicture" class="input-file" type="file" >
                    </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fullLength1">Full Length Picture 1</label>
                    <div class="col-md-4">
                        <input id="fullLength1" name="fullLength1" class="input-file" type="file" >
                    </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fullLength2">Full Length Picture 2</label>
                    <div class="col-md-4">
                        <input id="fullLength2" name="fullLength2" class="input-file" type="file" >
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
        $('#userDobAndTime').datetimepicker();

        // binds form submission and fields to the validation engine
        $("#tryitForm").validationEngine();


    });
</script>