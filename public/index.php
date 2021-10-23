<?php
require "../vendor/autoload.php";

use Database\Database;

$db = new Database();
$db->connectToDB();
$sql = "INSERT INTO test VALUES (NULL, :name)";
$db->insertIntoDb($sql, [':name' => 'Milton']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stineline</title>
</head>

<body>
  Working
</body>

</html>