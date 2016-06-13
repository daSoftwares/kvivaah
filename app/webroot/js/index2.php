<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/flatly/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-2 column">
                </div>
                <div class="col-md-8 column">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                QR code generator 
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>QR Code is a new way of Information Interchange. QR Code looks very interesting, but contains many information in its heart. Lets create your own custom QR Code, and share your private information in terms of Code.</p>
                            <form class="form-horizontal">

                                <fieldset>

                                    <!-- Form Name -->
                                    <legend>QR code generator </legend>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4>
                                            Alert!
                                        </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="forSize" class="col-md-4 control-label">QR Size</label>
                                        <div class="col-md-4">
                                            <select name="forSize" class="form-control">
                                                <option value="150x150">150x150</option>
                                                <option value="200x200">200x200</option>
                                                <option value="250x250">250x250</option>
                                                <option value="300x300">300x300</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="forEncoding" class="col-md-4 control-label">QR Encoding Type</label>
                                        <div class="col-md-4">
                                            <select name="forEncoding" class="form-control">
                                                <option value="UTF-8">UTF-8</option>
                                                <option value="Shift_JIS">Shift_JIS</option>
                                                <option value="ISO-8859-1">ISO-8859-1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="forErrorC" class="col-md-4 control-label">Error correction</label>
                                        <div class="col-md-4">
                                            <select name="forErrorC" class="form-control">
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="Q">Q</option>
                                                <option value="H">H</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="forText"  class="col-md-4 control-label">Any Text Content</label>
                                        <div class="col-md-4">
                                            <textarea name="forText" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <!-- Button (Double) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-8">
                                            <button id="submit" name="submit" class="btn btn-success">Get QR Code</button>
                                            <button id="reset" name="reset" class="btn btn-warning">Reset</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Panel footer
                        </div>
                    </div>
                </div>
                <div class="col-md-2 column">
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    </body>
</html>