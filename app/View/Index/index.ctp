<style>
/*
.main-text
{
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}
.btn-min-block
{
    min-width: 170px;
    line-height: 26px;
}
.btn-clear
{
    color: #FFF;
    background-color: transparent;
    border-color: #FFF;
    margin-right: 15px;
}
.btn-clear:hover
{
    color: #000;
    background-color: #FFF;
}
*/
</style>

    <div class="row">
	<div class="col-md-4"> <div class="panel panel-primary"> <div class="panel-heading"> <h3 class="panel-title">Search Here</h3> </div> <div class="panel-body"> <form class="form-horizontal" action="<?php echo $this->webroot;?>users/search"> <fieldset> <!-- Form Name --> <legend>Form Name</legend> <!-- Multiple Radios (inline) --> <div class="form-group"> <label class="col-md-6 control-label" for="userType">Looking For</label> 
            <div class="col-md-6"> 
               <select name="userType" id="userType" class="form-control input-md">
               <option value="0">Bride/Girl</option>
                <option value="1">Groom/Boy</option>
               </select>
      
 </div> </div> <!-- Multiple Radios (inline) --> <div class="form-group"> <label class="col-md-6 control-label" for="isManglik">Is Manglik?</label> <div class="col-md-6"> <label class="radio-inline" for="isManglik-0"> <input type="radio" name="isManglik" id="isManglik-0" value="0" checked="checked"> No </label> <label class="radio-inline" for="isManglik-1"> <input type="radio" name="isManglik" id="isManglik-1" value="1"> Yes </label> </div> </div> <!-- Select Basic --> <div class="form-group"> <label class="col-md-6 control-label" for="ageLimit">Age Upto</label> <div class="col-md-6"> <select id="ageLimit" name="ageLimit" class="form-control input-md"> <option value="">N/A</option>
        <?php for($age = 18;$age<=USER_SEARCH_AGE_LIMIT;$age++){?>
            <option value="<?php echo $age;?>"><?php echo $age;?></option>
        <?php }?>
             </select> </div> </div> <!-- Text input--> <div class="form-group"> <label class="col-md-6 control-label" for="location">Place</label> <div class="col-md-6"> <input id="location" name="location" type="text" placeholder="Nasik" class="form-control input-md"> </div> </div> <!-- Button --> <div class="form-group"> <label class="col-md-2 control-label" for="singlebutton"></label> <div class="col-md-3"> <button id="singlebutton" value="<?php echo md5((time().rand()))?>" name="token" class="btn btn-success">Search</button> </div><div class="col-md-3"> <button id="singlebutton" name="singlebutton" class="btn btn-warning" type="reset">Reset</button></div> </div> </fieldset> </form> </div> </div>
	</div>
	
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo $this->webroot;?>images/ganesh.gif" style="width:700px; height:380px;" alt="First slide">
                        <!--<div class="carousel-caption">
                            <h3>
                                First slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>-->
                    </div>
                    <div class="item">
                        <img src="<?php echo $this->webroot;?>images/shubh-vivaah.jpg"  style="width:700px; height:380px;" alt="Second slide">
                        <!--<div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>-->
                    </div>
                    <div class="item">
                        <img   style="width:700px; height:380px;" src="<?php echo $this->webroot;?>images/gatbandan.jpg
						" alt="Third slide">
                        <!--<div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>-->
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <!--<div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>
                        Static Headline And Content</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h3>
                    <div class="">
                        <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                            href="http://www.jquery2dotnet.com/">Registration</a></div>
                </div>
            </div>-->
        </div>
    </div>
    
    <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
         <div class="panel panel-primary">
  <div class="panel-body">
    		<p><blockquote>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</blockquote></p>
            </div>
            </div>
    	</div>
    </div>
    
    <div class="row clearfix"> <div class="col-md-12 "> <div class="panel panel-primary"> <div class="panel-heading"> <h3 class="panel-title">Why Registered with Us???</h3> </div> <div class="panel-body"> <div class="row"> <div class="col-md-4"> <div class="thumbnail"> <img src="http://placehold.it/250x200&amp;text=Its Free" class="img-responsive img-circle" alt="300x200"> <div class="caption"> <h3> Thumbnail label </h3> <p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p> <p> <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a> </p> </div> </div> </div> <div class="col-md-4"> <div class="thumbnail"> <img src="http://placehold.it/250x200&amp;text=Its Easy" class="img-responsive img-circle" alt="300x200"> <div class="caption"> <h3> Thumbnail label </h3> <p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p> <p> <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a> </p> </div> </div> </div> <div class="col-md-4"> <div class="thumbnail"> <img src="http://placehold.it/250x200&amp;text=Its Fast" class="img-responsive img-circle" alt="300x200"> <div class="caption"> <h3> Thumbnail label </h3> <p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p> <p> <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a> </p> </div> </div> </div> </div> </div> </div> </div> </div>
	     

