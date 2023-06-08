<h3>Détail du ticket numéro :{{$ticket->id}}</h3>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>SUJET</td>
            <td>DATE DE CREATION</td>
            <td>TATUS</td>
            <td>DETAIL</td>
        </tr>
    </thead>
        <tbody>
            <tr>
                <td>{{ $ticket->id }}</td>
                 <td>{{ $ticket->sujet }}</td>
                 <td>{{ $ticket->created_dat }}</td>
                <td>{{ $status->label }}</td>

                <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
            </tr>

        </tbody>
    </table>
<span style="width:100%; margin-top:10px;display:flex;justify-content:space-evenly;">

    
    <button><a href="{{route('all_tickets')}}">tous les tickets</a></button>
</span>
