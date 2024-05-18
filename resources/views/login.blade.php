@include('include.login_header');

<div class="row">
	<div class="col-md-4 col-md-offset-3">
		<div class="well" style="position:relative;top:20vh;">
		<center><h2 style="margin-top:1px;">Employee Task Management System</h2></center>
			<form class="form-horizontal form-custom-login" action="" method="POST">
			  <div class="form-heading">
			    <h2 class="text-center">Login Panel</h2>
			  </div>
			  
			  <!-- <div class="login-gap"></div> -->
			  <?php if(isset($info)){ ?>
			  <h5 class="alert alert-danger"><?php echo $info; ?></h5>
			  <?php } ?>
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Username" name="username" required/>
			  </div>
			  <div class="form-group" ng-class="{'has-error': loginForm.password.$invalid && loginForm.password.$dirty, 'has-success': loginForm.password.$valid}">
			    <input type="password" class="form-control" placeholder="Password" name="admin_password" required/>
			  </div>
			  <button type="submit" name="login_btn" class="btn btn-info pull-right">Login</button>
			</form>
		</div>
	</div>
</div>


@include('include.footer');

