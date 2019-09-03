<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" media="screen" href="<?php echo base_url('assets/css/template.min.css');?>">
<link rel="stylesheet" media="screen" href="<?php echo base_url('assets/css/dashboard/dashboard.css');?>">
</head>
<br>
<br>
<br>
<body>
<div class="wrapper fadeInDown">
	<div id="formContent">
		<div class="fadeIn first">
            <?php
                if (!empty($error_msg)) {
                    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$error_msg.'</div>';
                }
            ?>
		</div>
		<br>
		<form method="post" name="form_login_c3men">
			<input type="text" id="login" class="fadeIn second" name="username_c3men" placeholder="login">
			<input type="password" id="password" class="fadeIn third" name="password_c3men" placeholder="password">
			<input type="submit" class="fadeIn fourth" name="login_submit_c3men" value="login">
		</form>
		<div id="formFooter">
			<a href="<?php echo base_url();?>">back to home</a>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/template.min.js');?>"></script>