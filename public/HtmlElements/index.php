<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>HtmlElements Example | QA-Tools</title>
		<link rel="stylesheet" href="../assets/css/foundation.min.css"/>
		<script src="../assets/js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="large-12 columns">
				<h1>HtmlElements Example</h1>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns" id="block-sidebar">
				<div id="login-sidebox" class="panel">
					<form method="post">
						<?php if ( $_SERVER['REQUEST_METHOD'] === 'POST' ): ?>
							<small class="field-error error">Invalid username or password</small>
						<?php endif; ?>

						<label>E-mail or Username:</label>
						<input type="text" name="u.login-sidebox[-2][UserLogin]" value=""/>

						<label>Password:</label>
						<input type="password" name="u.login-sidebox[-2][UserPassword]" value=""/>

						<input type="submit" class="small button" name="events[u.login-sidebox][OnLogin]" value="Login"/>
					</form>
				</div>
			</div>
			<div class="large-8 columns header">
				<div class="row">
					<div class="large-4 columns">
						&nbsp;
					</div>

					<div class="large-4 columns">
						<label>Language:</label>
						<select name="language">
							<option value="1">English</option>
							<option value="2">Russian</option>
						</select>
					</div>

					<div class="large-4 columns">
						<label>Currency:</label>
						<select name="curr_iso">
							<option value="USD">USD</option>
							<option value="EUR">EUR</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<a href="../">Go to Homepage</a>
			</div>
		</div>

		<script src="../assets/js/vendor/jquery.js"></script>
		<script src="../assets/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
