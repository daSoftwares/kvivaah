<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php echo $pageDesc;?>">
        <meta name="keywords" content="<?php echo $pageKeyword;?>">
        <meta name="author" content="<?php echo WEBSITE_AUTHOR;?>">
		<link rel="icon" type="image/ico" href="<?php echo $this->webroot;?>images/website-icon.ico" />
        <title><?php echo $pageTitle;?></title>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo $this->webroot;?>ie8/html5shiv.js"></script>
        <script src="<?php echo $this->webroot;?>ie8/respond.min.js"></script>
        <![endif]-->
         <link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $this->webroot;?>css/socialmedia.min.css">
         <!--<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css" rel="stylesheet">-->
        <!----><link href="<?php echo $this->webroot;?>css/united-bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->webroot;?>css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrapValidator.min.css">
        
        <script src="<?php echo $this->webroot;?>js/jquery.min.js"></script>
        <script src="<?php echo $this->webroot;?>js/jquery.browser.min.js"></script>
        <script src="<?php echo $this->webroot;?>js/bootstrapValidator.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-primary"><?php echo WEBSITE_NAME;?><img src="<?php echo $this->webroot;?>images/website-logo.png" width="50" height="50" /> <small><?php echo WEBSITE_SUBTITLE;?></small></h1>
                </div>
            </div>
     <?php echo $this->element('site-navbar');?>
 		<?php echo $this->fetch('content'); ?>
   	 <?php echo $this->element('site-footer');?>
        </div>
    </body>
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/bootstrap-datetimepicker.min.js"></script>

    <script>
        $(document).ready(function() {
			 $('[data-toggle="tooltip"]').tooltip();
			// find all the href with no extension associated and append .html to them
			$('a').each(function() {
				var onlyDot = $(this).attr("href").indexOf('.');
				console.log($(this).attr("href"));
				console.log(onlyDot);
				if(onlyDot <= 0){
					$(this).attr("href", $(this).attr("href")+'.html'); 
				}
			});
		     $('#loginForm').bootstrapValidator({
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
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
                   // console.log(validator);
                    //alert(form);
                   // console.log(submitButton);
                }
            });
        });
    </script>
<?php //echo $this->element('sql_dump'); ?>
</html>