<?php
require_once "db_connect.php";

if (isset($_POST["submit"])) {
    //$first_name = $_POST["first_name"];
    //$last_name = $_POST["last_name"];
    //$email = $_POST["email"];

    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $image = $_POST["image"];
    $isbn = $_POST["isbn"];
    $publisher_Adress = $_POST["publisher_adress"];
    $publisher_name = $_POST["publisher_name"];
    $publish_date = $_POST["publish_date"];
    $short_description = $_POST["short_description"];
    $status = $_POST["status"];
    $title = $_POST["title"];
    $type = $_POST["type"];

    $sql = "INSERT INTO `user`( `author_first_name`, `author_last_name`, `image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`,) VALUES ('$author_first_name`, `$author_last_name`, `$image`, `$isbn`, `$publisher_Adress`, `$publisher_name`, `$publish_date`, `$short_description`,`$status`, `$title`, `$type`)";
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