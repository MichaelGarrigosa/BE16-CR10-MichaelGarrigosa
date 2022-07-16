<?php
require_once "db_connect.php";

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO `user`( `first_name`, `last_name`, `email`) VALUES ('$first_name','$last_name','$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "User has been created";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="email" name="email">
        <input type="submit" name="submit" value="CREATE">
    </form>
</body>

</html>