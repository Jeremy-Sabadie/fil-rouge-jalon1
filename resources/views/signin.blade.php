<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="signin.css">
    @vite(['resources/css/app.css'])
</head>
<header>
    <nav></nav>
</header>

<body id="signin">
    <img src="/images/logo_amio.png" alt="logo">
    <form action="" method="post">
        <label for="mail">email</label>
        <input type="email" id="mail" placeholder="email" require>
        <label for="passw">enter your password</label>
        <input type="password" id="password" placeholder="password" require>
        <label for="confirm">confirm your password</label>
        <input type="password" id="confirm" placeholder="confirm password" require>
        <button type="submit">sign in</button>

    </form>
    <p>OR</p>
    <span>
        <p>Create an account</p>

            <a href="../01_sign_up_pages/signup.html">sign up</a>
    </span>
    <a href="">mot de passe oublié</a>
    <!-- a effacer: -->
    <a href="{{route('home')}}">visiter</a>
</body>

</html>
