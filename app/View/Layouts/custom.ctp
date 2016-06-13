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
         <!----><link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css" rel="stylesheet">
        <!--<link href="<?php echo $this->webroot;?>css/united-bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->webroot;?>css/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrapValidator.min.css">
        
        <script src="<?php echo $this->webroot;?>js/jquery.min.js"></script>
        <script src="<?php echo $this->webroot;?>js/jquery.browser.min.js"></script>
        <script src="<?php echo $this->webroot;?>js/bootstrapValidator.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-primary">Kayastha Vivaah <small>Find your soul mate at right place...</small></h1>
                </div>
            </div>
     <?php echo $this->element('site-navbar');?>
 		<?php echo $this->fetch('content'); ?>
   	 <?php echo $this->element('site-footer');?>
        </div>
    </body>
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/moment.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/bootstrap-datetimepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();


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


<?php echo $this->element('sql_dump'); ?>
</html>
