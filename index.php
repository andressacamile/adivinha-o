<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>Faça Login</h1>
        <form id="login-form" action="user.php" method="post">
            <div class="form-group">
                <label for="username">usuario:</label>
                <input type="text" id="password" name="password" required>

            </div>
            <div class="form-group">
                <label for="password">senha</label>
            <input type="password" id="password" name="password" required>
            </div>
            <button type="button" id="login-button">Login</button>
        </form>

</div>
</body>
<html>