@extends('templates.home')
@section('content')
<main>
        <h4>TDéclarer un nouveau ticket*</h4>
        <img src="../images/logo_amio.png" alt="logo">
        <form action="" method="post">
            <label for="sujet">sujet du ticket</label>
            <input type="text" name="sujet" id="sujet">

            <label for="coments">commentaires</label>
            <input type="text" placeholder="commentaires" id="coments">
            <button type="submit">valider</button>

        </form>
    </main>
@endsection
