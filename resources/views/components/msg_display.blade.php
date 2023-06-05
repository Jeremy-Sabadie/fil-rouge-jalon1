@include('components.head')
<h3><u>détail de la conversation</u></h3>
<div id="conversation">
    <ul>

        @forelse ($msg as $ms)
            <li>
                <p><b><u>le: </u></b>{{ $ms->created_dat }}</p><b><u>
                        <p>auteur:{{ $ms->id_auteur }}</p>
                    </u></b>
                <i>
                    <p>{{ $ms->content }}</p>
                </i>
            </li>
        @empty
        @endforelse
    </ul>
    <form action="{{route('ticket_detail',['n'=>$ticket->id])}}"method="post">

        @csrf

        <label for="new_msg"> nouveau message</label>
        <input type="text" name="new_msg" placeholder="écrivez votre message">
        <button type submmit>envoyer</button>
    </form>
</div>