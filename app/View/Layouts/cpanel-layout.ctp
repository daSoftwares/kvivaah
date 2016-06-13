<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Home Page">
<meta name="keywords" content="Home Page">
<meta name="author" content="Rohit Shrivastava rohit.shrivastava22@gmail.com">
<title><?php echo $pageTitle;?></title>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="/lets-secure-your-wealth/css/socialmedia.css">
<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css" rel="stylesheet">
<!--<link href="<?php echo $this->webroot;?>css/united-bootstrap.min.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" media="screen" href="http://eonasdan.github.io/bootstrap-datetimepicker/content/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="http://bootstrapvalidator.com/vendor/bootstrapvalidator/css/bootstrapValidator.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="http://bootstrapvalidator.com/vendor/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
</head>
    <body>
    <div class="container">
     <?php echo $this->element('cpanel-navbar');?>
 		<?php echo $this->fetch('content'); ?>
   	 <?php echo $this->element('site-footer');?>
    </div>
    </body>
     <script src="http://127.0.0.1/lets-secure-your-wealth/js/bootstrap.min.js"></script> 
     <script type="text/javascript" src="http://eonasdan.github.io/bootstrap-datetimepicker/scripts/moment.js"></script>
     <script type="text/javascript" src="http://eonasdan.github.io/bootstrap-datetimepicker/scripts/bootstrap-datetimepicker.js"></script>

 	<script>
	$(document).ready(function() {
	   $('[data-toggle="tooltip"]').tooltip();
	  
	  
	 $('#loginForm').bootstrapValidator({
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
			password: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            }
        },
        submitHandler: function(validator, form, submitButton) {
           console.log(validator);
		   alert(form);
			 console.log(submitButton);
        }
    });
	});
	</script>



</html>
