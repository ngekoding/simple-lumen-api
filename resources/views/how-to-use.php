<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ToDo List API</title>
		<!-- Lumen icon -->
		<link rel="icon" type="image/png" href="https://lumen.laravel.com/img/favicons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="https://lumen.laravel.com/img/favicons/favicon-16x16.png" sizes="16x16" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<hr>
					<div class="title text-center">
						<h4>Welcome to ToDo List API</h4>
						<p>This API build with <a href="https://lumen.laravel.com">Lumen</a>. The stunningly fast micro-framework by Laravel.</p>
						<p class="small">Lecturer: Mr. Chandra Kusuma Dewa</p>
					</div>
					<hr>
					<h2>Documentation</h2>
					<p>Just a simple way to use this simple API.</p> <br>
					<h4>Routes</h4>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>URI</th>
								<th>Method</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>/</td>
								<td>GET</td>
								<td>Show documentation page.</td>
							</tr>
							<tr>
								<td>/register</td>
								<td>POST</td>
								<td>
									<p><code>params:</code> email, username, password.</p>
									<p>
										<code>response:</code> <span class="label label-default">JSON</span> success (true/false), message (string).<br>
										</pre>
									</p>
								</td>
							</tr>
							<tr>
								<td>/login</td>
								<td>POST</td>
								<td>
									<p><code>params:</code> email and password.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false).</p>
									If login success, you will get <code>api_token</code> and message as an array of user data (id, username, email, etc).
								</td>
							</tr>
							<tr>
								<td>/user/{id}</td>
								<td>GET</td>
								<td>
									<p><code>{id}</code> User ID.</p>
									<p>Get user data by given ID.</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
							<tr>
								<td>/tasks</td>
								<td>GET</td>
								<td>
									<p>Get all tasks by logged user.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false).</p>
									<p>If not empty, you will get <code>result</code> of array (id, user_id, title, description, status, etc).</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
							<tr>
								<td>/tasks/{status}</td>
								<td>GET</td>
								<td>
									<p><code>{status}</code> todo/doing/done.</p>
									<p>Get all tasks with specific {status}.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false).</p>
									<p>If not empty, you will get <code>result</code> of array (id, user_id, title, description, status, etc).</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
							<tr>
								<td>/tasks</td>
								<td>POST</td>
								<td>
									<p>Create new task.</p>
									<p><code>params:</code> title, description.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false), message (string).</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
							<tr>
								<td>/tasks/{id}</td>
								<td>PUT</td>
								<td>
									<p>Updating task.</p>
									<p><code>{id}</code> Task ID.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false), message (string).</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
							<tr>
								<td>/tasks/{id}</td>
								<td>DELETE</td>
								<td>
									<p>Deleting task.</p>
									<p><code>{id}</code> Task ID.</p>
									<p><code>response:</code> <span class="label label-default">JSON</span> success (true/false), message (string).</p>
									<p><span class="label label-warning">api_token</span> required.</p>
								</td>
							</tr>
						</tbody>
					</table>

					<br>

					<p align="center">&copy; 2016 by Our Team. Build with Lumen & Love.</p>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>