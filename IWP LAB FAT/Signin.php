<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
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
  function validateForm() {
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    var email = document.forms["myForm"]["email"].value;
    var phone = document.forms["myForm"]["phone"].value;
    var address = document.forms["myForm"]["address"].value;
    if (email == "") {
      alert("Email must be filled out");
      return false;
    } else {
      // Validating Email usig Regular Expression
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!regex.test(email)) {
        alert("Invalid Email");
        return false;
      } else {
        return true;
      }
    }
    if (phone == "") {
      alert("Phone must be filled out");
      return false;
    } else {
      // Validating Phone Number usig Regular Expression
      var regex = /^[0-9]{10}$/;
      if (!regex.test(phone)) {
        alert("Invalid Phone Number");
        return false;
      } else {
        return true;
      }
    }
    if (address == "") {
      alert("Address must be filled out");
      return false;
    } else {
      // No Regular Expression here.
      return true;
    }
    if (username == "") {
      event.preventDefault();
      alert("Username must be filled out");
      return false;
    } else {
      // validating username via regular expression
      var usernameRegex = /^[a-zA-Z]+$/;
      if (!usernameRegex.test(username)) {
        event.preventDefault();
        alert("Username must be alphabetical");
        return false;
      }
    }
    if (password == "") {
      event.preventDefault();
      alert("Password must be filled out");
      return false;
    } else {
      // validating password via regular expression
      var passwordRegex = /^[a-zA-Z0-9]+$/;
      if (!passwordRegex.test(password)) {
        event.preventDefault();
        alert("Password must be alphanumeric");
        return false;
      }
    }
  }
  </script>
</head>

<body>

  <form name="myForm" action="register.php" method="post" onsubmit="return validateForm()">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="username">New Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">New Password:</label>
    <input type="password" name="password" id="password">
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone">
    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <input type="submit" value="Signin">
  </form>


</body>

</html>