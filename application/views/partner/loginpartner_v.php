<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Partner Tripseru.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="/asset/admin/css/bootstrap.min.css" rel="stylesheet">
    <style>
		body { 
		  background: url(/upload/ecbe7c9dbd5e7a481844ecd833f649e6.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		.error{
			padding: 15px;
    		background-color: red;
    		color: #fff;
    		margin: 0px 0px 20px;
		}
		
		.panel-default {
		opacity: 0.9;
		margin-top:30px;
		}
		.form-group.last { margin-bottom:0px; }
	</style>
    </head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
            	<img src="/asset/images/logo.png" style="width:100%; padding:5px;">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Partner Login</div>
                <div class="panel-body">
                    <!--<form class="form-horizontal" role="form">-->
                    <?php 
						if (isset($error)) { ?>
							<div class="error"> <?php echo $error; ?> </div>
					<?php } ?>
                    <?php echo validation_errors(); ?>
   					<form class="form-horizontal" role="form" action="<?php echo base_url() ?>partner/verifylogin">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registred? <a href="http://www.jquery2dotnet.com">Register here</a></div>
            </div>
        </div>
    </div>
</div>
</body>
