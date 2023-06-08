<aside>
        <h2>Informations</h2>

        <ul>
           @forelse ($tickets as $ticket)

                <li style="display: block;">
                    <p><u>numéro:</u> {{ $ticket->id }}</p>
                    <p><u>sujet:</u> {{ $ticket->sujet }}</p>
                    <p><u>créé le:</u> {{ $ticket->created_dat }}</p>
                    <p><u>status:</u> {{$ticket->label}}</p>
                    <button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button>

                </li>
                    @empty
                <p>aucune information</p>
            @endforelse
        </ul>
    </aside>
