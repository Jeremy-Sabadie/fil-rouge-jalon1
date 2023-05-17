<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    @vite(['resources/css/app.css'])
</head>
<header>
    <nav></nav>
</header>

<body>
    <img src="../images/logo_amio.png" alt="logo">
    <form action="" method="post">
        <label for="mail">email</label>
        <input type="email" id="mail" placeholder="email" require>
        <label for="passw">enter your password</label>
        <input type="password" id="password" placeholder="password" require>
        <label for="confirm">confirm your password</label>
        <input type="password" id="confirm" placeholder="confirm password" require>
        <button type="submit">sign up</button>

    </form>
    <p>OR</p>

    <span>
        <p>Already have an account: </p>

        <a href="../02_sign_in_pages/signin.html">sign in</a>
    </span>
    <a href="">Mot de passe oublié</a>
</body>

</html>
