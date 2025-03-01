<?php
    session_start();
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test na login</title>
</head>
<body>
    <p>
        hello <?php
        if (isset($_SESSION["email"])) {
            $email = $_SESSION["email"];
            $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['firstName'] . ' ' . $row['lastName'];
            }
            
        }
        ?>
        :)
    </p>
</body>
</html>