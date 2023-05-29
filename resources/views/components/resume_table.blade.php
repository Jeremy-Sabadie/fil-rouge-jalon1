<h3>résumé du ticket: #{{ $ticket->id }}</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>SUJET</th>
            <td>DATE DE CREATION</td>
            <td>STATUS</td>
        </tr>
    </thead>
    <tr>
        <th>#{{ $ticket->id }}</th>
        <th>{{ $ticket->sujet }}</th>
        <th>{{ $ticket->created_dat }}</th>
        <td><img src="/images/alerte.png" alt=""></td>
    </tr>

</table>
