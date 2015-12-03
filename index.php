<?php include("includes/header.php"); ?>
<?php $specs = getSpecs($dbhandle); ?>
<?php //$states = getStates($dbhandle); ?>
<?php include("includes/handle_index.php"); ?>
	
      <div class="starter-template">
        <h1>Welcome!</h1>
        <p class="lead">If you’d like to search Pinnacle’s current physician listings, please select from the drop down below.</p>
		<p class="lead">Or click <a href="http://www.phg.com?mob=no">here</a> to visit our full website for more info.</p>
		<form action="" method="post">
		<?php if($msg!='') { ?>
		<p class="alert alert-danger"><?php echo $msg; ?></p>
		<?php } ?>
		<select class="form-control" name="spec">
			<option value="">-- Select Specialty --</option>
			<?php
			echo var_dump($specs);
				foreach ($specs as $key=>$val)
				{
					echo '<option value="'.$key.'"';
					if($spec==$key)
						echo "selected";
					echo '>'.$val.'</option>';
				}
			?>
			
		</select>
		<br/>
		<!--<select class="form-control" name="state" >
			<option value="">-- Select State --</option>
			<?php
				/*foreach ($states as $key=>$val)
				{
					echo '<option value="'.$key.'" ';
					if($state==$key)
						echo "selected";
					echo '>'.$val.'</option>';
				}*/
			?>
		</select>
		<br/>-->
		 
        
		<input type="submit" class="btn btn-lg btn-primary" name="nextbtn" value="Next" />
		</form>
		
      </div>

	  <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            
          </div>
         
        </div><!-- /.col-sm-4 -->
	  </div>
	    
	
	<?php include("includes/footer.php"); ?>