<?php
require_once "db_connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    $sql = "UPDATE `user` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email' WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "User has been updated";
        header("refresh:3;url= index.php");
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
        <input type="text" name="first_name" value="<?php echo $row["first_name"] ?>">
        <input type="text" name="last_name" value="<?= $row["last_name"] ?>">
        <input type="email" name="email" value="<?= $row["email"] ?>">
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>