<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="public/backend/js/picture-fall.js"></script>
  	<script type="text/javascript" src="public/backend/js/jquery-1.8.2.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 30px;">
		<div class="col-md-6 col-xs-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post" action="">
						<!--row username-->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-2">Username</div>
							<div class="col-md-9">
								<input type="text" name="username" required class="form-control">
							</div>
						</div>
						<!--end row username-->
						<!--row password -->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-2">Password</div>
							<div class="col-md-9">
								<input type="password" name="password" required class="form-control">
							</div>
						</div>
						<!--end row password-->
						<!--row submit -->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-2"></div>
							<div class="col-md-9">
								<input type="submit" class="btn btn-primary" value="Login">
								<input type="reset" class="btn btn-danger" value="Reset">
							</div>
						</div>
						<!--end row submit-->
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>