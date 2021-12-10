<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
  body {
    background-image: url("https://wallpapercave.com/wp/wp6549698.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  }

  form {
    background-color: rgba(255, 255, 255, 0.5);
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    border-radius: 10px;
    font-weight: 900;
  }

  input {
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 5px;
    margin: 5px;
  }
  </style>
  <script type="text/javascript">
  function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "") {
      alert("Please enter username");
      return false;
    }
    if (password == "") {
      alert("Please enter password");
      return false;
    }
    return true;
  }
  </script>
</head>

<body>

  <form action="WelcomeHome.php" method="post" onclick="return validate()">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
  </form>
</body>

</html>