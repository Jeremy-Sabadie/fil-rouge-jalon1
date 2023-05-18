@extends('templates.signtemplate')

@section('title')
    Sign up
@endsection

@section('content')
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

        <a href="{{ route('signin') }}">sign in</a>
    </span>
    <a href="">Mot de passe oublié</a>
@endsection
