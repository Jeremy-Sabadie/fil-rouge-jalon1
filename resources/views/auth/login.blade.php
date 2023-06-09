@extends('templates.signtemplate')

@section('title')
    Sign in
@endsection

@section('content')
<img src="/images/logo_amio.png" alt="logo">
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <div><p>Quelque chose s'est mal passé</p></div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus />
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required/>
        </div>

        <div>
            <button type="submit">Se connecter</button>
            <a href="{{ route('register') }}"> pas encore de compte</a>
        </div>
    </form>
@endsection
