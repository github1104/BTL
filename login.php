
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <div>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">
            <div class="input">
                <label >Username</label>
                <input type="text" name="username">
            </div>
            <div class="input">
                <label >Password</label>
                <input type="password" name="password">
            </div>
            <div class="input">
                <button type="submit" name="login" class="btn">Sign in</button>
            </div>
        </form>
    </div>
</body>
</html>