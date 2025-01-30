<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <form action="ceklogin.php" method="post">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
        </section>
     </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<title>Login Aplikasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="h-100 bg-info d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 mx-auto bg-light p-4 rounded shadow">
				<h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
				<form action="ceklogin.php" method="post">
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Username" id="username" name="username" >
					<input class="form-control form-control-lg mb-3" type="password" placeholder="Password" id="password" name="password">
					<input class="btn btn-info btn-lg btn-block" type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>