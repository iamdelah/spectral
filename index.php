<?php include 'includes/header.php'; ?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>WEB PROGRAMMING WITH KEYS</h2>
							<p>Login Form</p>

							<?php
							if (!isset($_SESSION['username'])) {
								// code...
								echo "You are not logged in </br>";
								echo "<form action='login.php' method='post'>
								<input type='text' name='username' placeholder='Enter your username' required></br>
								<input type='password' name='password' placeholder='Enter your password' required></br>
								<button name='submit' class='button primary'> Login </button>
									  </form>";

							} else {
								echo "Welcome ". "" .$_SESSION['username']. "" . "You're are now logged in </br>";
								echo "<a href='logout.php' class='button primary'>Login<a/>";
							}
							?>
							 </p> <ul class="actions special">
						</div>
					</section>

<?php include 'includes/footer.php'; ?>


			