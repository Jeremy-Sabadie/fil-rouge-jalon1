@include('components.head')
<p>détail de la conversation</p>
<div id="conversation">
    <ul>

        @forelse ($msg as $ms)
            <li>
                <p><u>le:</u>{{ $ms->created_dat }}</p><b><u>
                        <p>auteur:{{ $ms->id_auteur }}</p>
                    </u></b>
                <i>
                    <p>a écrit:{{ $ms->content }}</p>
                </i>
            </li>
        @empty
        @endforelse
    </ul>
    <form action="{{route('ticket_detail')}}"method="post">

        @csrf

        <label for="new_msg"> message</label>
        <input type="text" name="new_msg" placeholder="écrivez votre message">
        <button type submmit>envoyer</button>
    </form>
</div>
