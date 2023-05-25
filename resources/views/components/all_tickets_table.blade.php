@section('content')
    @if (session()->has('message'))
        {{session('message')}}
    @endif
<h3>Tous vos tickets</h3>
<table>
        <tbody>
            <th>ID_TICKET</th>
            <th>SUJET</th>
            <th>ID8STATUS</th>
            <th>DATE_CREATION</th>
            <th>DETAIL</th>
        </tbody>
        <tr>
            <td>{{$ticket->id}}</td>
            <td>{{$ticket->sujet}}</td>
            <td>{{$ticket->idstatus}}</td>
            <td>{{$ticket->cdat}}</td>
            <td><button type="button"><a href="{{route('detail',['n'=>$ticket->id])}}">Detail</a></button></td>
            <td><img src="/images/alerte.png" alt=""></td>
            <td>....</td>
        </tr>
        <tr>
            <td>#0008</td>
            <td>08/03/2023</td>
            <td><img src="/images/fait.png" alt="green"></td>
            <td>....</td>
        </tr>
    </table>
