<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
<div class="panel panel-info">
					<!--panel heading-->
					<div class="panel-heading text-center"> Login</div>
					<!--panel body starts here-->
					<div class="panel-body">
						<!--form starts here-->
						<form method="POST" action="borang02.php">
							<div class="form-group">
      							<input type="text" class="form-control" id="uname" placeholder="Username" name="login[name]">
    						</div>
   							<div class="form-group">
      							<input type="password" class="form-control" id="pwd" placeholder="Password" name="login[password]">
    						</div>
    						<div class="checkbox">
     							<label><input type="checkbox" name="remember"> Remember me on this computer</label>
   							</div>
   							<div class="text-right">
    							<input type="submit" value="Login" class="btn btn-info">
    						</div>
    					<!--form ends here-->
    					</form>
    				<!--footer starts and ends here-->
    				<div class="panel-footer text-center"><a href="">Forget your password?</a></div>
					<!--panel body ends here-->
					</div>
				<!--panel ends here-->
				</div>
				<!--linking for signup-->
				<div class="text-center">
					<a href="">Register Here</a>				</div>
	</div>
</div>