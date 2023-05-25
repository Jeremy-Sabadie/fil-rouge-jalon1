<form action="{{route ('avion_create')}}" method="POST" style=" width:200px;display: flex; flex-direction:column; justify-content:space-around;">
@csrf
    <label for="nom">entrez le nom</label>
    <input type="text" name="nom" id="nom" placeholder="nom de l'avion">

    <label for="avno">entrez le numéro de l'avion</label>
    <input type="number" name="avno" id="avno" placeholder="numéro de l'avion">

    <label for="capacity" placeholder="capacité de l'avion">entrez la capacité de l'avion</label>
    <input type="number" name="capacity" id="capacity" placeholder="numéro de l'avion">
    <label for="location">entrez la localisation de l'avion</label>
    <input type="text" name="location" id="location" placeholder="localisation">
    <button type="submit">valider</button>
</form>
{{-- @isset($messagerror){
    {$messagerror}
}

@endisset --}}
