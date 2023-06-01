@include('components.head')
<div id="conversation">
        <ul>

                @forelse ($msg as $i)
<li>
    <p>{{$i->created_dat}}</p><i><p>{{$i->auteur}}</p></i>
                    <p>{{$msg->content}}</p>
</li>
                 @empty

                @endforelse
        </ul>
    </div>
