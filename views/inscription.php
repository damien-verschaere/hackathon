<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/inscription.css">
    <title>Inscription</title>
</head>
<body>
<main>

    <?php require "../requires/header.php" ?>
    <div class="login-box">
        <h2>Inscription</h2>
        <form>
            <div class="user-box">
                <input type="text" name="login" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Confirmation de password</label>
            </div>
            <a href="../views/connexion.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>
    </div>
</main>
    <?php require "../requires/footer.php" ?>
</body>
</html>





