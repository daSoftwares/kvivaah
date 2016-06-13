<?php
//debug($this->fullBaseUrl);
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

/*
if(empty($userInfo) || empty($userImages)){
    $errorCode = 2;
    $errorMsg = 
}*/
 if(!$this->Session->read('userInfo')){
	 $userProfileImg = 'http://placehold.it/150x150&text=Profile%20Photo';
	 $userFull1 = 'http://placehold.it/500x800&text=Full%20Length%201';
	 $userFull2 = 'http://placehold.it/500x800&text=Full%20Length%202';
	 }
?>
<script src="<?php echo $this->webroot;?>js/jQuery.print.min.js"></script>
<div class="row">
 <?php echo $this->element('left-ads-sidebar');?>

    <div class="col-md-9">
           <?php echo $this->element('alert-msg-bar');?>
        <?php if($errorCode !== MSG_ERROR_CODE){?>
        <div class="panel panel-info" id="printProfileDiv">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $userDetails->userDisplayName ;?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"><img class="img-responsive img-circle" alt="User Pic" src="<?php echo $userProfileImg;?>" width="100" height="100" class="img-circle"> </div>

                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>Looking For:</td>
                                    <td><?php echo ($userDetails->userType == 1 ? 'Bride' : 'Groom');?></td>
                                </tr>
                                <tr>
                                    <td>User Education:</td>
                                    <td><?php echo $userDetails->userEducation  ;?></td>
                                </tr>
                                <tr>
                                    <td>Current Age:</td>
                                    <td><?php 
							$datetime1 = new DateTime('Now');
							$date1 = $userDetails->userDobAndTime;
							$date2 = date('Y-m-d H:i:s');
							
							$diff = abs(strtotime($date2) - strtotime($date1));
							
							$years = floor($diff / (365*60*60*24));
							$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
							$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
							
							printf("%d years, %d months, %d days\n", $years, $months, $days);
							
						//echo $userDetails->userDisplayName ;?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth & Time:</td>
                                    <td><?php echo date('d-F-Y, h:i A', strtotime($userDetails->userDobAndTime));?></td>
                                </tr>
                                <tr>
                                    <td>Place of Birth:</td>
                                    <td><?php echo $userDetails->userBirthPlace;?></td>
                                </tr>

                                <tr>
                                    <td>Manglik:</td>
                                    <td><?php echo ($userDetails->isManglik == true ? 'Yes' : 'No' );?></td>
                                </tr>
                                <tr>
                                    <td>Primary Mobile:</td>
                                    <td><?php echo $userDetails->userMobile  ;?></td>
                                </tr>
                                <tr>
                                    <td>Gurdian Mobile:</td>
                                    <td><?php echo $userDetails->gurdianMobile;?></td>
                                </tr>


                            </tbody>
                        </table>
                        <div class="col-md-3">
                            <a href="#."  class="thumbnail" data-toggle="modal" data-target="#userFull1">
                                <img src="<?php echo $userFull1;?>" width="100" height="100"  class="img-responsive" ></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#."  class="thumbnail"  data-toggle="modal" data-target="#userFull2">
                                <img src="<?php echo $userFull2;?>" width="100" height="100"  class="img-responsive" ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a  href="#." id="princtProfileBtn" data-original-title="Print Profile" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i></a>
               <?php if($this->Session->read('userInfo') && ($userDetails->id == $this->Session->read('userInfo')->id)){?>
                <span class="pull-right">
                    <a href="<?php echo $this->webroot.PAGE_EDIT_PROFILE.$userDetails->id;?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="#." data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                </span>
               <?php }?>
            </div>

        </div>
        <?php }?>
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
<script>
    $(document).ready(function() {
        $('#princtProfileBtn').click(function() {
            $('#printProfileDiv').printElement({
                overrideElementCSS: [
                    {href: '<?php echo $this->webroot;?>css/united-bootstrap.min.css', media: 'print'}]
            });
        });

    });
</script>