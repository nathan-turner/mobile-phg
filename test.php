<?php include("includes/header.php"); ?>
<script type="text/javascript">
var getStr = window.location.search.substr(1);

        var getArray = getStr.split ("&");

        var get = {};


        for ( var i = 0; i < getArray.length; i++) {

        var tmpArray = getArray[i].split("=");

        get[tmpArray[0]] = tmpArray[1];

        }
		if ((get.mob == "yes" || !get.mob) && screen.width <= 800) {

                window.location = "http://mobile.phg.com"

        }

        else if (get.mob == "no") {

                window.location = "http://www.phg.com";

        }

</script>
	<div class="container">
	
      <div class="starter-template">
        <h1>Welcome!</h1>
        <p class="lead">Make your selections below to start your search.</p>
		
		<select class="form-control" >
			<option value="">-- Select Spec --</option>
			<option value=""></option>
		</select>
		<br/>
		<select class="form-control" >
			<option value="">-- Select State --</option>
			<option value=""></option>
		</select>
		<br/>
		 <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
      </div>

	  <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
         
        </div><!-- /.col-sm-4 -->
	  </div>
	  
    </div><!-- /.container -->
	
	<?php include("includes/footer.php"); ?>