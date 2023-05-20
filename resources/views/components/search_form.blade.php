<form action="" method="post">

    <label for="name">nom du ticket</label>
    <input type="text" name="ticket_name" id="name">

    <label for="number">numéro du ticket</label>
    <input type="text" name="ticket_nB" id="number">

    <label for="creation">date de création du ticket</label>
    <input type="text" name="ticket_creation" id="creation">
    <label for="type">type de panne</label>
    <select name="type" id="type">
        <option value="panne matérielle">panne matérielle

        </option>
        <option value="panne logicielle">panne logicielle

        </option>
    </select>
    <button type="submit">rechercher</button>
</form>
