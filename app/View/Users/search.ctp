<?php
//debug($userList);
$totalResults = count($userList);
?>
<div class="row">
 <?php echo $this->element('left-ads-sidebar');?>

    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading"> <h3 class="panel-title">Search Results <div class="pull-right"><strong>Profile found: <?php echo $totalResults;?></strong></div></h3> </div>
            <div class="panel-body">

           <?php echo $this->element('alert-msg-bar');?>
                <?php if($this->Session->read('userInfo')){
                    
                if($totalResults){?>



                            <?php foreach ($userList as $userInfo) {
                                $userInfo = (object)$userInfo;
                                
                                $userProfileImg = 'http://placehold.it/150x150&text=Profile%20Pic';
                                 if(isset($userInfo->userImage) && count($userInfo->userImage)){
                            $userImages =  $userInfo->userImage;
                            $userProfileImg = USER_PROFILE_HTTP_PATH.$userImages[0]['imgName'];
                             }?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <div class="col-md-3">
                                        <img src="<?php echo $userProfileImg;?>" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-9">
                                        Name: <a href="<?php echo $this->webroot;?>user/userProfile/<?php echo $userInfo->id;?>" target="_blank"><?php echo $userInfo->userDisplayName;?></a> <br />
                                        Age: <?php $datetime1 = new DateTime('Now');
							$date1 = $userInfo->userDobAndTime;
							$date2 = date('Y-m-d H:i:s');
							
							$diff = abs(strtotime($date2) - strtotime($date1));
							
							$years = floor($diff / (365*60*60*24));
							$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
							$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
							
							printf("%d years, %d months, %d days\n", $years, $months, $days);?> <br />
                                        Highest Education: <?php echo $userInfo->userEducation;?> <br />
                                        Location: <?php echo $userInfo->userBirthPlace;?> <br />
                                        Manglik: <?php echo ($userInfo->isManglik) ? 'Yes' : 'No';?> <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <?php }
                }else{
                    echo 'Nothing to show.';
                }?>
                <ul class="pagination pull-right">
                <?php echo $this->Paginator->numbers(array('currentClass' => 'active', 'currentTag'=>'a', 'tag' => 'li', 'ellipsis' => '...', 'separator'=> ''));?>
                </ul>
                <?php }?>

            </div>
        </div>
    </div>
</div>
<?php echo $this->element('bottom-ads-bar');?>
