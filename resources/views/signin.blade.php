@extends('templates.signtemplate')

@section('title')
    Sign in
@endsection

@section('content')
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

    <a href="{{ route('signup') }}">sign up</a>
</span>
<a href="">mot de passe oublié</a>
<!-- a effacer: -->
<a href="{{ route('home') }}">visiter</a>
@endsection
