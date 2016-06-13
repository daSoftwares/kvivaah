 <?php 
 $alertMsg = $class = $msgText = NULL;
 if(isset($errorCode) && isset($errorMsg) && is_int($errorCode) && (!empty($errorMsg))){
	 	if($errorCode === MSG_SUCCESS_CODE){
			$class = 'alert-success';
			$msgText = '<b>Congrats!</b><br />'.$errorMsg;
			}elseif($errorCode === MSG_ERROR_CODE){
			$class = 'alert-danger';
			$msgText = '<b>Oops!</b><br />'.$errorMsg;
		}elseif($errorCode === MSG_INFO_CODE){
			$class = 'alert-info';
			$msgText = '<b>Please Note!</b><br />'.$errorMsg;
		}
		
	$alertMsg = '<div class="alert '.$class.'">
 					'.$msgText.'
 				</div>';	
	 }
echo $alertMsg;
?>
