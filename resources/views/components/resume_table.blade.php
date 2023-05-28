<h3>résumé du ticket: #{{ $ticket->id }}</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>SUJET</th>
            <td>DATE DE CREATION</td>
        </tr>
    </thead>
    <tr>
        <th>#{{ $ticket->id }}</th>
        <th>{{ $ticket->sujet }}</th>
        <th>{{ $ticket->created_dat }}</th>
    </tr>

</table>
