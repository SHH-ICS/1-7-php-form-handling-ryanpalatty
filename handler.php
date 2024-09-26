<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $userName = "";
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
  }
  echo "<h1>Welcome " . $name . "!</h1>\n";
  ?>

</body>

</html>