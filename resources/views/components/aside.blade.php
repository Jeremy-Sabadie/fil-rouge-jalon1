<aside>
        <h2>Mes tickets</h2>
        <ul>
           @forelse ($tickets as $ticket)

                    <li><tr>
                        <td>{{ $ticket->id }}</td><td>{{ $ticket->sujet }}</td><td>{{ $ticket->created_dat }}</td><td><li><img src="/images/alerte.png" alt=""></td>
                    </tr>



                    <li><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></li>
                    @empty
                <p>...</p>
            @endforelse
        </ul>
    </aside>
