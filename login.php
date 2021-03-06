<?php include('process.php') ?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<style>
			<?php include "style.css" ?>
		</style>
		<title>CMS | Login</title>
    </head>
    <body>
        <div class="header">
            <!-- <h2>Log in to CMS</h2> -->
        </div>
        <!-- <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Usernamey</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member, join us now! <a href="register.php">Sign up</a>
            </p>
        </form> -->

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center my-5">
						<h2 class="heading-section">Log in to CMS</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap py-0">
							<h3 class="text-center mb-0">Welcome</h3>
							<p class="text-center">Sign in by entering the information below</p>
							<form method="post" action="login.php" class="login-form">
								<?php include('errors.php'); ?>
								<div class="form-group mb-3">
									<label class="form-label">Username</label>
									<input type="text" name="username" class="form-control black" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label class="form-label">Password</label>
									<input type="password" name="password" class="form-control black" placeholder="Password" required>
								</div>
								<div class="form-group my-3 d-md-flex">
									<div class="w-100 text-md-end">
										<a href="#" aria-disabled="true">Forgot Password</a>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" name="login_user" class="btn form-control btn-primary rounded submit px-3 btn-custom">Login</button>
								</div>
							</form>
							<div class="w-100 text-center mt-4 text">
								<p class="mb-0">Not yet a member, join us now!</p>
								<a href="./register.php">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>