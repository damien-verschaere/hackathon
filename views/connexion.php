<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <title>Connexion</title>
</head>
<body>
    <header>
        <?php require "../requires/header.php" ?>
    </header>
    <main>
    <div class="login-box">
        <h2>Login</h2>
        <form>
            <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
            </div>
            <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
            </div>
            <a href="../views/profils.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
            </a>
        </form>
        </div>
    </main>
    <div id='footer'>
        <?php require "../requires/footer.php" ?>
    </div>
</body>
</html>

