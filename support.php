<?php include('header.php');  ?>
<link rel="stylesheet" type="text/css" href="style.css"> 
 <div align="left" class="col-sm-12 well">
	<p class="text-center lead">MI-Soft BD Support Form</p>
	<p class="text-center  text-info"><b></b></p>
	<form id="sms" method="post" action="" role="form" class="form-horizontal">
	<div class="form-group">
		<label class="col-md-4 control-label" for="firstname">
			Project Name*
		</label>
		<div class="col-md-4 col-lg-6">
			<input type="text" placeholder="Project Name" name="name" id="name" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="firstname">
			Contact Number*
		</label>
		<div class="col-md-4 col-lg-6">
			<input type="number" maxlength="11" placeholder="Enter your contact number" name="contact" id="contact" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="firstname">
			Email Address
		</label>
		<div class="col-md-4 col-lg-6">
			<input type="email" placeholder="Enter your email" name="email" id="email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="firstname">
			Requirement
		</label>
		<div class="col-md-4 col-lg-6">
			<textarea required="" placeholder="Requirement" id="address" name="address" class="form-control"></textarea>
		</div>
	</div>
			<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									Service/Product*
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="2" name="service[]">&nbsp;Domain &amp; Hosting</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="3" name="service[]">&nbsp;Website Development</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="6" name="service[]">&nbsp;Email Marketing</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="7" name="service[]">&nbsp;SMS Marketing</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="8" name="service[]">&nbsp;Search Engine Optimization</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="9" name="service[]">&nbsp;Software Development</label>
			</div>
		</div>
				<div class="form-group">
			<label class="col-md-4 control-label" for="firstname">
									&nbsp;
								</label>
			<div class="col-md-4 col-lg-6 checkbox">
				<label><input type="checkbox" class="" role="checkbox" value="11" name="service[]">&nbsp;Others</label>
			</div>
		</div>
			  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-6">
	      <button class="btn btn-primary" type="submit">Submit</button>
		  <button id="reset" class="btn btn-default" type="reset">Reset</button>
	    </div>
	  </div>
	</form>
</div>

 <?php include('footer.php');  ?>