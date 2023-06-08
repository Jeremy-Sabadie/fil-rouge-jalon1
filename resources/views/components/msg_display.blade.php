@include('components.head')
<h3><u>détail de la conversation dut icket: {{ $ticket->id }}</u></h3>
<button id="msgon" style="margin-bottom: 10px;cursor: pointer;">voir la conversation</button>
<div id="conversation">
    <ul>

        @forelse ($msg as $ms)
            <li style="line-height: 0px;">
                <p><b><u>le: </u></b>{{ $ms->created_dat }}</p><b><u>
                        <p>auteur:</u> {{ $ms->name }}</p>
                    </b>
                <i>
                    <p>{{ $ms->content }}</p>
                </i>
            </li>
        @empty
        @endforelse
        <form action="{{route('ticket_detail',['n'=>$ticket->id])}}"method="post" id="msg_ticket">
        @csrf
        <label for="new_msg"> nouveau message</label>
        <input type="text" name="new_msg" placeholder="écrivez votre message">
        <button type="submit">envoyer</button>
    </form>
    </ul>

</div>
