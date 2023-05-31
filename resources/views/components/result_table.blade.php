<h3>résultat de votre recherche</h3>
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

            @forelse ($tickets as $ticket)
            <tr>

                <td>{{ $ticket->id }}</td>
                 <td>{{ $ticket->sujet }}</td>
                 <td>{{ $ticket->created_dat }}</td>
                <td><img src="/images/alerte.png" alt=""></td>

                <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
            </tr>
                @empty
                    <p>....</p>
            @endforelse
        </tbody>
    </table>
