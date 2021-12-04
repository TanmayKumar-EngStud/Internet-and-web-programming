<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Fruit Survey</title>
  <style type="text/css">
  h1 {

    font-size: 14pt;
    text-align: center;
    margin-bottom: 0px;
    margin-left: auto;
    margin-right: auto;
    width: 500px;
  }

  h2 {

    font-size: 14pt;
    text-align: center;
    margin: 0px auto;
    margin-bottom: 15px;
    width: 500px;
  }

  table {

    border-collapse: collapse;
    margin: 0px auto;
    margin-top: 15px;
    width: 500px;
    padding: 15px;
    background-color: rgb(255, 179, 153, .8);
    border-radius: 5px;
    box-shadow: 0px 0px 5px #888888;
  }

  th,
  td {
    padding: 20px;
    background-color: none;
  }

  form {

    margin-left: auto;
    margin-right: auto;
    margin-top: 0px;
    padding: 5px;
    width: 500px;
    background-color: rgb(255, 179, 153, .8);
    border-radius: 10px;
    box-shadow: 5px 5px 5px #888888;
  }

  label {
    display: block;
    font-size: 12pt;
    float: left;
    text-align: right;
    margin-right: 10px;
    width: 200px;
    margin-bottom: 10px;
  }

  div.radioSet {
    width: 300px;
    margin-left: 210px;
  }

  div.radioSet label {
    display: inline;
    float: none;
  }

  input,
  select {
    margin-bottom: 10px;
  }

  input[type="submit"] {
    margin-left: 210px;
    padding: 5px;
    border-radius: 5px;
  }

  span.error {
    color: #F00;
  }
  </style>
</head>

<body>
  <?php
$NameError = $AddressError = $EmailError = $QuantityError = $favFruitError = "";
$Name = $address = $Email = $Quantity = "";
$favFruit = array();
$haserrors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if any of the values are empty, set the error message
    if (empty($_POST["name"])) {
        $NameError = "Missing";
        $haserrors = true;
    }
    else {
        $Name = $_POST["name"];
    }

    if (empty($_POST["address"])) {
        $AddressError = "Missing";
        $haserrors = true;
    }
    else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"]))  {
        $EmailError = "Missing";
        $haserrors = true;
    }
    else {
        $Email = $_POST["email"];
    }

    if (!isset($_POST["Quantity"])) {
        $QuantityError = "You must select 1 option";
        $haserrors = true;
    }
    else {
        $Quantity = $_POST["Quantity"];
    }

    if (empty($_POST["favFruit"])) {
        $favFruitError = "You must select 1 or more Fruits";
        $haserrors = true;
    }
    else {
        $favFruit = $_POST["favFruit"];
    }
    if (!$haserrors) {
        echo "<h1>Thank you for your Survey!</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<td>" . "Name:" . "</td>". "<td>" . $_POST["name"] . "</td>". "</tr>";
        echo "<tr>";
        echo "<td>" . "Email Id:" . "</td>". "<td>" . $_POST["email"] . "</td>". "</tr>";
        echo "<tr>";
        echo "<td>" . "No. of fruits per day:" . "</td>". "<td>" . $_POST["Quantity"] . "</td>". "</tr>";
        echo "<tr>";
        echo "<td>" . "My favourite fruit:" . "</td>". "<td>" ;
        echo implode(", ", $_POST["favFruit"]) . '<br>';
        echo "</td>". "</tr>";

        echo "</table>";
        
        
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET"  || $haserrors)
{
?>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>The World of Fruit</h1>
    <h2>Fruit Survey</h2>

    <label for="name">Name</label>
    <input id="name" type="text" name="name" value="<?php echo htmlspecialchars($Name);?>">
    <span class="error"><?php echo $NameError; ?></span><br>
    <label for="address">Address</label>
    <input id="address" type="text" name="address" value="<?php echo htmlspecialchars($address);?>">
    <span class="error"><?php echo $AddressError; ?></span><br>
    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="<?php echo htmlspecialchars($Email);?>">
    <span class="error"><?php echo $EmailError; ?></span><br>
    <label>How many pieces of fruit do you eat per day?</label>
    <div class="radioSet">
      <input type="radio" id="Quantity_0" name="Quantity"
        <?php if (isset($Quantity) && $Quantity == "zero") echo "checked"; ?> value="zero">
      <label for="Quantity_0">0</label>
      <span class="error"><?php echo $QuantityError; ?></span><br>
      <input type="radio" id="Quantity_1" name="Quantity"
        <?php if (isset($Quantity) && $Quantity == "one") echo "checked"; ?> value="one">
      <label for="Quantity_1">1</label><br>
      <input type="radio" id="Quantity_2" name="Quantity"
        <?php if (isset($Quantity) && $Quantity == "two") echo "checked"; ?> value="two">
      <label for="Quantity_2">2</label><br>
      <input type="radio" id="Quantity_x" name="Quantity"
        <?php if (isset($Quantity) && $Quantity == "twoplus") echo "checked"; ?> value="twoplus">
      <label for="Quantity_x">More than 2</label>
    </div>
    <br>
    <label for="favFruit">My favorite fruit</label>
    <select id="favFruit" name="favFruit[]" size="4" multiple>
      <?php
    $options = array("apple", "banana", "plum", "pomegranate",
        "strawbErrory", "watermelon");
    foreach ($options as $option) {
        echo '<option value="' . $option . '"';
        if (in_array($option, $favFruit)) {
            echo " selected";
        }
        echo ">" . ucfirst($option) . "</option>";
    }
?>
    </select>
    <span class="error"><?php echo $favFruitError; ?></span>
    <br>
    <label for="">Would you like a brochure?</label>
    <input id="brochure" type="checkbox" name="brochure" value="Yes">
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
}
?>
</body>

</html>