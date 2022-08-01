<?php 

require 'database.php'; 

$message = '';

if (!empty($_POST['username'])) {
    $sql = "INSERT INTO names (username) VALUES (:username)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    if ($stmt->execute()) {
        $message = 'Successfully created new user';
    } else {
        $message = 'Error creating new user';
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Welcome </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php require 'partials/header.php'; ?>
    <h1>Write a name</h1>

    <form action="php-login" method="post">
        <input type="text" name="username" placeholder="Write a name">
        <input type="submit" value="Send">
    </form>
</body> 
</html>