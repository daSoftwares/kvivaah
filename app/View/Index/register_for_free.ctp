<?php //debug($errorMsg);?>
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/validationEngine.jquery.css" type="text/css"/>
<script src="<?php echo $this->webroot;?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="<?php echo $this->webroot;?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	
 <div class="row">
   <?php echo $this->element('left-ads-sidebar');?>
  
        <div class="col-md-9">
   	   			<form id="tryitForm" class="form-horizontal" method="post"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Register for free</legend>
    <?php echo $this->element('alert-msg-bar');?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userDisplayName">Full Name 
  	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="This name will show in profile display."></span>
  </label>  
  <div class="col-md-5">
  <input id="userDisplayName" name="userDisplayName" placeholder="Saagar Saxena" class="validate[required] text-input form-control input-md" value="" type="text">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="userType">User Type </label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="userType-0">
      <input name="userType" id="userType-0" value="0" checked="checked" type="radio">
      BRIDE
    </label> 
    <label class="radio-inline" for="userType-1">
      <input name="userType" id="userType-1" value="1" type="radio">
      GROOM
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userEmail">Email 	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="This name will show in profile display."></span></label>  
  <div class="col-md-5">
  <input id="userEmail" name="userEmail" placeholder="saagar.saxena@gmail.com" class="validate[required,custom[email]] form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userMobile">Primary Mobile No.	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Mobile number must be 10 digit long and this will use as user id while login. All other user will contact on this given number."></span> </label>  
  <div class="col-md-5">
  <input id="userMobile" name="userMobile" placeholder="9157894231" class="validate[required,custom[phone]] text-input form-control input-md"  type="text">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userPassword">Enter Password	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Password must be between 8 to 12 digit  long."></span></label>
  <div class="col-md-5">
    <input id="userPassword" name="userPassword" placeholder="password" class="form-control input-md"  type="password">
    </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userDobAndTime">User Date of birth and time	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide accurate Date and Time of birth."></span></label>  
  <div class="col-md-5">
  <input id="userDobAndTime" readonly name="userDobAndTime" placeholder="06/28/1988 8:51 PM" class="form-control input-md"  type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userBirthPlace">User Birth Place	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide accurate place of birth."></span></label>  
  <div class="col-md-5">
  <input id="userBirthPlace" name="userBirthPlace" placeholder="Nasik" class="validate[required] text-input form-control input-md"  type="text">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="isManglik">Is user Manglik?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="isManglik-0">
      <input name="isManglik" id="isManglik-0" value="0" checked="checked" type="radio">
      No
    </label> 
    <label class="radio-inline" for="isManglik-1">
      <input name="isManglik" id="isManglik-1" value="1" type="radio">
      Yes
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userEducation">User Highest Education	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Please provide highest education certificate hold by user."></span></label>  
  <div class="col-md-5">
  <input id="userEducation" name="userEducation" placeholder="B.Tech" class="validate[required] text-input form-control input-md"  type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gurdianMobile">Secondary Mobile no.	<span class="glyphicon glyphicon-question-sign " data-toggle="tooltip" data-placement="top" title="Mobile number must be 10 digit long and this will be used as second alternet number."></span></label>  
  <div class="col-md-5">
  <input id="gurdianMobile" name="gurdianMobile" placeholder="7908656463" class="validate[required,custom[phone]] text-input form-control input-md"  type="text">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="profilePicture">Profile Picture</label>
  <div class="col-md-4">
    <input id="profilePicture" name="profilePicture" class="validate[required] input-file" type="file" >
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="fullLength1">Full Length Picture 1</label>
  <div class="col-md-4">
    <input id="fullLength1" name="fullLength1" class="validate[required] input-file" type="file" >
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="fullLength2">Full Length Picture 2</label>
  <div class="col-md-4">
    <input id="fullLength2" name="fullLength2" class="validate[required] input-file" type="file" >
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" id="submit" name="submit" class="btn btn-success">Register</button>
    <button id="reset" name="reset" class="btn btn-danger">Reset</button>
  </div>
</div>
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