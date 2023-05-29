@section('content')
    @if (session()->has('message'))
        {{session('message')}}
    @endif
<h3>Tous vos tickets</h3>
<table>
        <thead>
            <th>ID_TICKET</th>
            <th>SUJET</th>
            <th>ID_STATUS</th>
            <th>DATE_CREATION</th>
            <th>DETAIL</th>
        </thead>
        <tbody>
            <tr>
                @forelse ($tickets as $ticket )
                <td>{{ $ticket->id }}</td>
                <td>{{$ticket->sujet}}</td>
                {{-- <td>{{$ticket->idstatus}}</td> --}}
                {{-- <td>{{$ticket->cdat}}</td> --}}
                <td><button type="button"><a href="{{route('ticket_detail',['n'=>$ticket->id])}}">Detail</a></button></td>
                <td><img src="/images/alerte.png" alt=""></td>
                <td>....</td>
            </tr>
    @empty
    <p>...</p>
    @endforelse
    </tbody>
        </tbody>
    </table>

@extends('home')
@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Sujet</th>
            <th>dat de création</th>
            <th>Status</th>
            <th>détail</th>
            {{-- <th>Type de Panne</th>
            <th>Date de Création</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->sujet }}</td>
            <td>{{ $ticket->created_dat }}</td>
            <td>
                <form action="{{route('detail',['n'=>$ticket->id])}}" method="get">
                    <button>détail
                    </button>
                </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
