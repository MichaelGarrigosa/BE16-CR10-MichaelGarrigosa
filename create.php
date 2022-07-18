<?php
require_once "db_connect.php";

if (isset($_POST["submit"])) {
    //$first_name = $_POST["first_name"];
    //$last_name = $_POST["last_name"];
    //$email = $_POST["email"];

    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $id = $_POST["id"];
    $image = $_POST["image"];
    $isbn = $_POST["isbn"];
    $publisher_Adress = $_POST["publisher_adress"];
    $publisher_name = $_POST["publisher_name"];
    $publish_date = $_POST["publish_date"];
    $short_description = $_POST["short_description"];
    $status = $_POST["status"];
    $title = $_POST["title"];
    $type = $_POST["type"];

    $sql = "INSERT INTO `book_library`( `author_first_name`, `author_last_name`, `id`,`image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`,) VALUES ('$author_first_name`, `$author_last_name`, `$image`, `$isbn`, `$publisher_Adress`, `$publisher_name`, `$publish_date`, `$short_description`,`$status`, `$title`, `$type`)";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "book_library has been created";
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

        <input type="text" name="author_first_name">
        <input type="text" name="author_last_name">
        <input type="text" name="id">
        <input type="image" name="image">
        <input type="number" name="isbn">
        <input type="text" name="publisher_adress">
        <input type="text" name="publisher_name">
        <input type="text" name="status">
        <input type="text" name="title">
        <input type="text" name="type">
        <input type="submit" name="submit" value="Update">


    </form>
</body>

</html>