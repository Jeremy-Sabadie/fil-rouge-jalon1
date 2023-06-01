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
                <td><img src="/images/alerte.png" alt=""></td>
                <td>{{ $ticket->created_dat }}</td>
                <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
            </tr>

        </tbody>
    </table>
<button style="margin: 5%;"><a href="{{route('all_tickets')}}">tous les tickets</a></button>
<button style="margin-bottom: 5%;" id="msgon">voir la conversation</button>
