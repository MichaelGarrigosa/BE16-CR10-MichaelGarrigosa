<?php
require_once "db_connect.php";

$book_library = $_GET["book_library"];
$sql = "SELECT * FROM `book_library` WHERE `book_library` = $book_library";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//$sql = "INSERT INTO `book_libary`(`author_first_name`, `author_last_name`, `id`, `image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`,)
if (isset($_POST["submit"])) {

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

    $sql = "UPDATE `book_library`, SET `author_first_name`, `author_last_name`, `id`,`image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`, WHERE book_library = $book_library";
}
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "book_library has been updated";
    header("refresh:3;url= index.php");
} else {
    echo "Error";
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
        <input type="text" name="author_first_name" value="<?php echo $row["author_first_name"] ?>">
        <input type="text" name="author_last_name" value="<?php echo $row["author_last_name"] ?>">
        <input type="text" name="id" value="<?php echo $row["id"] ?>">
        <input type="image" name="image" value="<?php echo $row["image"] ?>">
        <input type="number" name="isbn" value="<?php echo $row["isbn"] ?>">
        <input type="text" name="publisher_adress" value="<?php echo $row["publisher_adress"] ?>">
        <input type="text" name="publisher_name" value="<?php echo $row["publishe_date"] ?>">
        <input type="text" name="status" value="<?php echo $row["status"] ?>">
        <input type="text" name="title" value="<?php echo $row["title"] ?>">
        <input type="text" name="type" value="<?php echo $row["type"] ?>">
        <input type="submit" name="submit" value="Update">

    </form>
</body>

</html>