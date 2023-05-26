<h3>résumé du ticket:#{{ $ticket->ID }}</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>SUJET</th>
            <td>DATE DE CREATION</td>
        </tr>
    </thead>
    <tr>
        <th>#{{ $ticket->ID }}</th>
        <th>{{ $ticket->SUJET }}</th>
        <th>{{ $ticket->CREATED_AT }}</th>
    </tr>

</table>
