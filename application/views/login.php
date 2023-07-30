<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet" />

    <!-- ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/style.css')?>" />

    <style type="text/css">
    	.form-signin {
		  max-width: 500px;
		  padding: 1rem;
		}

		.form-signin .form-floating:focus-within {
		  z-index: 2;
		}

		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
    </style>
</head>
<body style="background-color: #FDA8F8;">

	<!-- DIVIDER -->
    <div style="margin: 150px;"></div>

    <main class="form-signin w-100 m-auto">
	    <div class="container bg-light shadow-lg rounded p-4">
	    	<form action="<?= base_url('auth/prosesLogin')?>" method="POST">
				  <div class="mb-3">
				    <label for="email" class="form-label">Email address</label>
				    <input type="email" class="form-control" name="email" id="email" required>
				  </div>
				  <div class="mb-3">
				    <label for="password" class="form-label">Password</label>
				    <input type="password" class="form-control" name="password" id="password" required>
				  </div>
				  	<div class="d-grid gap-2 col-6 mx-auto">
					  <button class="btn btn-info" type="submit">Login</button>
					</div>
			</form>
	    </div>
	</main>

	<!-- JS -->
    <script type="text/javascript" src="<?= base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('asset/js/bootstrap.min.js')?>"></script>
</body>
</html>