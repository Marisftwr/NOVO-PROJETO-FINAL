<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increva-se</title>
</head>
<body>
<?php
$Name = $Email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["Name"]);
$email = test_input($_POST["Email"]);
}
function test_input($data) {
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h3>FORM IN PHP EXAMPLE</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="Name">
<br><br>
E-mail: <input type="text" name="Email">
</body>
</html>