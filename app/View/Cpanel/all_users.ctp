<?php //debug($allUsers);?>
<div class="row">
    <div class="col-md-12">
     <div class="page-header">
      <h1>Control Panel <small>View all users</small></h1>
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
              	  <h3 class="panel-title">Lastest joined First</h3>
				  	  <ul class="pagination pull-right">
					  <?php echo $this->Paginator->numbers(array('currentClass' => 'active', 'currentTag'=>'a', 'tag' => 'li', 'ellipsis' => '...', 'separator'=> ''));?>
					   </ul>
                </div>
                <div class="panel-body">
                    
                          <table class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>Username</th>
			   <th>Mobile</th>
			  <th>Gurdian Mobile</th>
              <th>Date registered</th>
              <th>Status</th>                                          
          </tr>
      </thead>   
      <tbody>
	  <?php if(is_array($allUsers) && count($allUsers)){
	  		foreach($allUsers as $userInfo){
				$userInfo = (object)$userInfo;
			?>
        <tr>
            <td><a href="#."><?php echo $userInfo->userDisplayName;?></a></td>
            <td><?php echo $userInfo->userMobile;?></td>
            <td><?php echo $userInfo->gurdianMobile;?></td>
			 <td><?php echo  $this->Time->format($userInfo->dateCreated, '%B %e, %Y %H:%M %p');?></td>
            <td><span class="label label-success"><?php echo $userInfo->userStatus;?></span>
            </td>                                       
        </tr>
		<?php }
		}?>
     <!--   <tr>
            <td><a href="#.">Emily F. Burns</a></td>
            <td>2011/12/01</td>
            <td>Staff</td>
            <td><span class="label label-danger">Banned</span></td>                                       
        </tr>
        <tr>
            <td><a href="#.">Andrew A. Stout</a></td>
            <td>2010/08/21</td>
            <td>User</td>
            <td><span class="label  label-info">Inactive</span></td>                                        
        </tr>
        <tr>
            <td><a href="#.">Mary M. Bryan</a></td>
            <td>2009/04/11</td>
            <td>Editor</td>
            <td><span class="label label-warning">Pending</span></td>                                       
        </tr>
        <tr>
            <td><a href="#.">Mary A. Lewis</a></td>
            <td>2007/02/01</td>
            <td>Staff</td>
            <td><span class="label label-success">Active</span></td>                                        
        </tr>   
		  <tr>
            <td><a href="#.">Donna R. Folse</a></td>
            <td>2012/05/06</td>
            <td>Editor</td>
            <td><span class="label label-success">Active</span>
            </td>                                       
        </tr>
        <tr>
            <td><a href="#.">Emily F. Burns</a></td>
            <td>2011/12/01</td>
            <td>Staff</td>
            <td><span class="label label-danger">Banned</span></td>                                       
        </tr>
        <tr>
            <td><a href="#.">Andrew A. Stout</a></td>
            <td>2010/08/21</td>
            <td>User</td>
            <td><span class="label  label-info">Inactive</span></td>                                        
        </tr>
        <tr>
            <td><a href="#.">Mary M. Bryan</a></td>
            <td>2009/04/11</td>
            <td>Editor</td>
            <td><span class="label label-warning">Pending</span></td>                                       
        </tr>
        <tr>
            <td><a href="#.">Mary A. Lewis</a></td>
            <td>2007/02/01</td>
            <td>Staff</td>
            <td><span class="label label-success">Active</span></td>                                        
        </tr>                                 -->  
      </tbody>
    </table>
	   </div>
	  </div>
     </div>
</div>

