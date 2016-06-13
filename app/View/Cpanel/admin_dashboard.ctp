<div class="row">
    <div class="col-md-12">
     <div class="page-header">
      <h1>Control Panel <small>A Super Admin dashboard</small></h1>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            Oh snap! Change a few things up and  
            <a href="#" class="alert-link">try submitting again.</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
              	  <h3 class="panel-title">Site Statitcs</h3>
                </div>
                      <div class="panel-body">
               				<div class="col-md-3">
                
                    <div class="panel panel-success">
					 <div class="panel-heading">
              	  <h3 class="panel-title"> New Users</h3>
                </div>
                      <div class="panel-body">
					  
                      <?php echo $totalUser;?>
                      </div>
                     
                    </div>
                </div>
                
                            <div class="col-md-3">
                            <div class="panel panel-default">
							 <div class="panel-heading">
              	  <h3 class="panel-title">Grooms till date</h3>
                </div>
                              <div class="panel-body">
                                <?php echo $activeGroom;?>
                              </div>
                            
                            </div>
                            </div>
                
                            <div class="col-md-3">
                            
                                <div class="panel panel-warning">
								 <div class="panel-heading">
              	  <h3 class="panel-title">Brides till date</h3>
                </div>
                                  <div class="panel-body">
                                    <?php echo $activeBride;?>
                                  </div>
                                 
                                </div>
                            </div>
                
                            <div class="col-md-3">
                            
                                <div class="panel panel-danger">
								 <div class="panel-heading">
              	  <h3 class="panel-title">Profile Matched</h3>
                </div>
                                  <div class="panel-body">
                                    <?php echo $matchedProfile;?>
                                  </div>
                                
                                </div>
                                  </div>
                	 </div>
            </div>
     </div>
</div>
<!--

<div class="row">
    <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
              	  <h3 class="panel-title">Panel title</h3>
                </div>
                      <div class="panel-body">
               				<div class="col-md-3 col-xs-3">
               					<a href="#" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span><br>21 New Users</a>
			                </div>
                
                            <div class="col-md-3 col-xs-3">
                				<a href="#" class="btn btn-info btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br>24 Grooms till date</a>
			                </div>
                
                            <div class="col-md-3 col-xs-3">
                				<a href="#" class="btn btn-info btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br>15 Brides till date</a>
			                </div>
                				
                            <div class="col-md-3 col-xs-3">
                				<a href="#" class="btn btn-danger btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br>11 Profile Matched</a>
			                </div>
                	 </div>
            </div>
     </div>
</div>
-->
<div class="row">
    <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title">Site Statitcs - A Graphical Representation</h3>
                </div>
                      <div class="panel-body">
               				<p id="chart_div"></p>

                	 </div>
            </div>
     </div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
