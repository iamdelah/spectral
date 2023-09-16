<?php session_start(); ?>

<?php require_once 'includes/constants.php'; ?>
<?php include 'includes/header.php'; ?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>WEB PROGRAMMING WITH KEYS</h2>
							<p>Login Form</p>

							<?php
							//form submission
							if (isset($_POST['submit'])) {
								$_SESSION['username'] = $_POST['username'];
								$_SESSION['password'] = $_POST['password'];
							} else {
								echo "access denied </br>";
							}

							//get the form data
							$user = $_SESSION['username'];
							$pass = $_SESSION['password'];

							//insert the form data into the database
							$sql = "INSERT INTO login(username, password) VALUES('$user', '$pass')";

							//check if query was successful
							if (mysqli_query($conn, $sql)) {
								echo "New user have been added successfuly. </br>";
							} else {
								echo "something happened" . $sql . "</br>" . mysqli_error($conn);
							}

							//close the database connection
							mysqli_close($conn);

							if (!isset($_SESSION['username'])) {
								// code...
								echo "You are not logged in </br>";
								echo "<form action='login.php' method='post' >
								<input type='text' name='username' placeholder='Enter your username' required></br>
								<input type='password' name='password' placeholder='Enter your password' required></br>
								</br>
								<button type='submit' name='submit' class='button primary'> Login</button>
									  </form>";

							} else {
								echo "Welcome ". "" . $_SESSION['username']. "". " You're are now logged in. </br>";
								echo "<a href='logout.php' class='button primary'>Logout<a/>";
							}
							?>
						</div>
					</section>

<?php include 'includes/footer.php'; ?>


			