<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            font-family: sans-serif;
            background: #eee;
            text-align: center;
        }

        form {
            background: #fff;
            margin: 0 8rem;
            border: 1px solid black;
            padding: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        input {
            display: block;
            margin: 0 auto;
            padding: 5px;
        }

        button {
            margin: 10px auto;
            display: block;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

<h1>Login</h1>

<form method="POST">

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>

</form>

<script>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = $_POST["username"];
    $pass = $_POST["password"];

    if (file_exists("Login.txt")) {

        $file = fopen("Login.txt", "r");

        $content = trim(fgets($file));

        fclose($file);

        if ($content == $uname . ":" . $pass) {

            echo "alert('Access Granted!');";

        } else {

            echo "alert('Incorrect Username or Password');";

        }

    } else {

        echo "alert('loginDetails.txt file not found');";

    }
}

?>

</script>

</body>
</html>