<?php include("includes/header.php"); ?>

<?php include("includes/handle_view.php"); ?>
<?php $job = getJob($dbhandle, $_GET["i"]); ?>	
<?php $job = $job[0]; ?>
      <div class="starter-template left">
        
        <p class="lead">Job Details</p>
		<form action="" method="post">
		<?php if($msg!='') { ?>
		<p class="alert alert-danger"><?php echo $msg; ?></p>
		<?php } ?>
		
		<?php if(count($job)>0) { ?>
		    <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Job <?php echo $job["id"]; ?></h3>
            </div>
            <div class="panel-body">              
            <strong>Specialty: </strong> <?php echo $job["spec"]; ?><br/><br/>
			<strong>State: </strong> <?php echo $job["state"]; ?><br/><br/>
			<strong>Description: </strong><br/><br/><?php echo $job["description"]; ?><br/>
			<?php if($job["job_image_name"]>0) { ?>
				<a href='<?php echo "http://www.phg.com/show_images.php?id=".$job["id"]; ?>' style="font-weight:bold" target="_blank">View Location Images</a>
			<?php } ?>
			
			<?php
				
					//echo var_dump($job);
					
			?>
			<br/>
			<br/>
			<a class="btn btn-lg btn-primary" href="mailto:<?php echo $job["email"]; ?>?subject=Information about Job#&nbsp;<?php echo $job["id"]; ?> -mobile site"> Email Recruiter</a>&nbsp;&nbsp;
			<?php if($job["phone"]!='') { ?>
				<a class="btn btn-lg btn-primary" href="tel:<?php echo $job["phone"]; ?>"> Call Recruiter</a>&nbsp;&nbsp;
			<?php } ?>
			<?php if($job["cell"]!='') { ?>
				<a class="btn btn-lg btn-primary" href="sms:<?php echo $job["cell"]; ?>"> Text Recruiter</a>&nbsp;&nbsp;
			<?php } ?>
			<a class="btn btn-lg btn-primary" href="http://www.phg.com/candidate-center/submit-your-cv/?JobId=<?php echo $job["id"]; ?>&amp;recruiter=<?php echo $job["name"]; ?>&amp;specialty=<?php echo $job["spec"]; ?>" target="_blank"> Submit CV</a>
			</div>
          </div>   
		  <?php } else { ?>
		  
		  <p class="alert alert-info">We couldn't find that job!</p>
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