<?php include("includes/header.php"); ?>

<?php include("includes/handle_results.php"); ?>
<?php $jobs = getJobs($dbhandle); ?>	
      <div class="starter-template left">
        
        <p class="lead">Job Results</p>
		<form action="" method="post">
		<?php if($msg!='') { ?>
		<p class="alert alert-danger"><?php echo $msg; ?></p>
		<?php } ?>
		
		<?php if(count($jobs)>0) { ?>
		<table class="table table-striped">
            <thead>
              <tr>
                <th>View</th>
                <th>Spec</th>
                <th>State</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>           
			<?php
				foreach ($jobs as $key=>$val)
				{
					//echo var_dump($val);
					$job=$val;
					echo '<tr>';
					echo '<td><a href="view.php?i='.$job["id"].'">'.$job["id"].'</a></td>';
					echo '<td>'.$job["spec"].'</td>';
					echo '<td>'.$job["state"].'</td>';
					echo '<td>'.substr(strip_tags($job["description"]),0,100).'...</td>';
					echo '</tr>';
				}
			?>
			</tbody>
          </table>
		  <?php } else { ?>
		  
		  <p class="alert alert-info">We don't have any opportunities matching your exact criteria right now, but we get new jobs often.<br/><br/><a href="profile.php"><strong>Update your profile to get notifications</strong></a> or <a href="http://www.phg.com/candidate-center/submit-your-cv/"><strong>Submit your CV</strong></a></p>
		  <?php } ?>
		
		<a href="index.php">Back to state/specialty selection</a>
		</form>
      </div>

	  <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            
          </div>
         
        </div><!-- /.col-sm-4 -->
	  </div>
	    
	
	<?php include("includes/footer.php"); ?>