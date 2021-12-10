<html>

<head>
  <title> Course Registration</title>
  <style>
  body {
    background-color: #F8F8FF;
  }

  header {
    width: 100%;
    padding: 0.5;
    height: 80px;
    display: flex;
    flex-direction: column;
  }

  h1 {
    text-align: center;
    color: turquoise;
    font-weight: bold;
  }

  img {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    position: absolute;
    right: 0;
    top: 0;
  }

  nav {
    border: 5px outset;
    width: 100%;
  }

  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: yellow;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: black;
    text-align: center;
    padding: 20px;
    text-decoration: none;
  }

  li a:hover {
    background-color: pink;
    font-weight: bold;
  }

  li ul {
    display: none;
    position: absolute;
  }

  li:hover ul {
    color: white;
    display: block;
  }

  li ul li {
    background-color: orange;
    clear: both;
    text-align: center;

  }

  li ul li {
    background-color: yellow;
    clear: both;
    text-align: center;

  }

  section {
    background-color: pink;
    clear: both;
    border: 2px solid blue;
    width: 25%;
    padding: 60px;
    float: center;
    margin: 10px;
    height: 30%;
    box-sizing: border-circle;
  }

  .myDiv {
    width: 100%;
    border: 5px outset;
    background-color: pink;
    padding: 20px;

  }
  </style>
</head>

<body>
  <?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = mysqli_connect("localhost", "tanmay", "tanmayDB", "IWP_LAB_FAT");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "<h1>Welcome $username</h1>";
			echo "<img src='https://www.w3schools.com/howto/img_avatar.png' alt='Avatar' class='avatar'>";
			echo "<nav>
					<ul>
						<li><a href='#'>Home</a></li>
						<li><a href='#'>About</a></li>
						<li><a href='#'>Contact</a></li>
						<li><a href='#'>Logout</a></li>
					</ul>
				</nav>";
			echo "<section>
					<div class='myDiv'>
						<h2>Course Registration</h2>
						<form action='CourseRegisteration.php' method='POST'>
							<label for='course'>Course:</label>
							<select name='course'>
								<option value='CSE'>CSE</option>
								<option value='ECE'>ECE</option>
								<option value='EEE'>EEE</option>
								<option value='MECH'>MECH</option>
								<option value='CIVIL'>CIVIL</option>
							</select>
							<br>
							<label for='semester'>Semester:</label>
							<select name='semester'>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
							</select>
							<br>
						</form>
					</div>";
		} else {
			echo "Invalid Username or Password";
		}
	?>
</body>

</html>