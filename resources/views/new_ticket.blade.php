@extends('templates.home')
@section('content')
<main>
        <h4>TDéclarer un nouveau ticket*</h4>
        <img src="../images/logo_amio.png" alt="logo">
        <form action="" method="get">
            <label for="date">date de création</label>
            <input type="date" name="date" id="date">
            <label for="date">titre</label>
            <input type="title" name="title" id="title">
            <label for="cat">catégorie</label>
            <select name="cat" id="cat">
                <option value="option1">panne matérielle</option>
                <option value="option2">panne logicielle</option>
            </select>
            <label for="coments">commentaires</label>
            <input type="text" placeholder="commentaires" id="coments">
            <button type="submit">valider</button>

        </form>
    </main>
@endsection
