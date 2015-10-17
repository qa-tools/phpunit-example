<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>BEM Example | QA-Tools</title>
		<link rel="stylesheet" href="../assets/css/foundation.min.css"/>
		<script src="../assets/js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="large-12 columns">
				<h1>BEM Example</h1>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns" class="b-sidebar">
				<div class="b-login_location_sidebar panel">
					<form method="post">
						<?php if ( $_SERVER['REQUEST_METHOD'] === 'POST' ): ?>
							<small class="b-login__error-msg error">Invalid username or password</small>
						<?php endif; ?>

						<label>E-mail or Username:</label>
						<input type="text" class="b-login__input-username" value=""/>

						<label>Password:</label>
						<input type="password" class="b-login__input-password_color_red" value=""/>

						<input type="submit" class="b-login__btn-login small button" value="Login"/>
					</form>
				</div>
			</div>
			<div class="large-8 columns b-header">
				<div class="row">
					<div class="large-4 columns">
						&nbsp;
					</div>

					<div class="large-4 columns">
						<label>Language:</label>
						<select name="b-header__language">
							<option value="1">English</option>
							<option value="2">Russian</option>
						</select>
					</div>

					<div class="large-4 columns">
						<label>Currency:</label>
						<select name="b-header__curr-iso">
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
