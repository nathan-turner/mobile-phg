<?php include("includes/header.php"); ?>
<?php $specs = getSpecs($dbhandle); ?>
<?php $states = getStates($dbhandle); ?>
<?php include("includes/handle_profile.php"); ?>
	
      <div class="starter-template left">
        <h3>Profile</h3>
        <p class="lead">Set up your profile to receive notifications</p>
		<form action="" method="post">
		<?php if($msg!='') { ?>
		<p class="alert alert-danger"><?php echo $msg; ?></p>
		<?php } ?>
		
		<?php if($msg2!='') { ?>
		<p class="alert alert-success"><?php echo $msg2; ?></p>
		<?php } ?>
		
		<label>Email*</label>
		<input type="email" name="email" class="form-control" value="<?php echo $_POST["email"]; ?>" />
		<br/>
		
		<label>Specialty*</label>
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
		<label>State</label>
		<select class="form-control" name="state" >
			<option value="">-- Select State --</option>
			<?php
				foreach ($states as $key=>$val)
				{
					echo '<option value="'.$key.'" ';
					if($state==$key)
						echo "selected";
					echo '>'.$val.'</option>';
				}
			?>
		</select>
		<br/>
		
		<label>Phone</label>
		<input type="text" name="phone" class="form-control" value="<?php echo $_POST["phone"]; ?>" />
		<br/>
		
		<label>Licenses</label>
		<input type="text" name="licenses" class="form-control" value="<?php echo $_POST["licenses"]; ?>" />
		<br/>
		
		<label>Enable Notifications</label>
		<input type="checkbox" name="notifications" class="form-control" style="width: 5%" 
		<?php
			if(isset($_POST["notifications"]))
				echo "checked";
		?>
		 />
		<br/>		
        
		<input type="submit" class="btn btn-lg btn-primary" name="nextbtn" value="Save" />
		</form>
      </div>

	  <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            
          </div>
         
        </div><!-- /.col-sm-4 -->
	  </div>
	    
	
	<?php include("includes/footer.php"); ?>