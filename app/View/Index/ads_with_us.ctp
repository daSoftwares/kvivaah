<style>
/* Badger
------------------------- */

[class*="badger"] {
    position: relative;
    margin: 15px 0;
    padding: 39px 19px 14px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
}

[class*="badger"]:after {
    content: attr(data-badger);
    position: absolute;
    top: 0;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    background: #999;
    color: #fff;
}

.badger-left:after {
    left: 0;
    border-radius: 6px 0 6px 0;
}

.badger-right:after {
    right: 0;
    border-radius: 0 6px 0 6px;
}

.badger-danger:after {
    background: #d9534f;
}

.badger-warning:after {
    background: #f0ad4e;
}

.badger-success:after {
    background: #5cb85c;
}

.badger-info:after {
    background: #5bc0de;
}

.badger-inverse:after {
    background: #222;
}
</style>

        
        <div class="row">
	<div class="col-md-9"> 
		<div class="panel panel-primary">
			 <div class="panel-heading"> 
			 	<h3 class="panel-title">Why Advertise with us?</h3>
			  </div>
		 <div class="panel-body">
	
        <div class="badger-left" data-badger="Badger default (left)">
Block with badger 1 
</div>

<div class="badger-right badger-info" data-badger="Badger info (right)">
Block with badger 2
</div> 

<div class="badger-left badger-danger" data-badger="Badger danger (left)">
Block with badger 3
</div>

<div class="badger-right badger-warning" data-badger="Badger warning (right)">
Block with badger 4
</div>

<div class="badger-left badger-success" data-badger="Badger success (left)">
Block with badger 5
</div>

<div class="badger-right badger-inverse" data-badger="Badger inverse (right)">
Block with badger 6
</div>

</div>
</div>
</div>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Contact Us</div>
  <div class="panel-body">
  
                <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose Subject:</option>
								<option value="Problem While Registring">Problem While Registring</option>
								<option value="General Enquiry">General Enquiry</option>
                                <option value="Advertisement Enquiry">Advertisement Enquiry</option>
                                <option value="Suggestions / Feedback">Suggestions / Feedback</option>
                            </select>
                        </div>
               
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="5" cols="10" required="required"
                                placeholder="Message"></textarea>
                        </div>
                  
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
       
			
  </div>
</div>
   <div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Working Hours</div>
  <div class="panel-body">
    
	<address>
  <strong>Contact Information</strong><br>
  Flat B/06, Radhika Vihar,<br>
  Wagholi, Pune - MH 412207<br>
  <!--<abbr title="Phone">P:</abbr> (123) 456-7890-->
</address>
	<address>
  <strong>Timing</strong><br>
 	9:30 AM To 6.30 PM<br />
	Monday To Saturday
</address>
	
  </div>
</div>
           </div><!--/span-->

</div>