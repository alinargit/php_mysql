<?php
$username = $_GET['username'];
$password = $_GET['password'];
echo "<br>";
echo $username;
echo "<br>";
echo $password;
?>


<!DOCTYPE html>
<head>
    <title>Our PHP Form</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username" placeholder="Username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
        <input type="submit" value="Submit"><br>

    </form>
</body>
</html>