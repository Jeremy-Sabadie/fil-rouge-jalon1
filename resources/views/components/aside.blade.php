<aside>
        <h2>Informations</h2>
        <ul>
           @forelse ($tickets as $ticket)

                <li style="display: block;">
                    <p>numéro: {{ $ticket->id }}</p>
                    <p>sujet: {{ $ticket->sujet }}</p>
                    <p>créé le: {{ $ticket->created_dat }}</p>
                    <p>status: <img src="/images/alerte.png" alt=""></p>
                    <button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button>
                </li>
                    @empty
                <p>aucune information</p>
            @endforelse
        </ul>
    </aside>
