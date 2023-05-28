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
        <tr>
            <td>{{$ticket->id}}</td>
            <td>{{$ticket->sujet}}</td>
            <td>{{$ticket->idstatus}}</td>
            <td>{{$ticket->cdat}}</td>
            <td><button type="button"><a href="{{route('ticket_detail',['n'=>$ticket->id])}}">Detail</a></button></td>
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

@extends('home')
@section('content')
<h3>liste des tickets</h3>
<table>
    <thead>
        <tr>
            <td>NUMERO</td>
            <td>SUJET</td>
            <td>DATE DE CREATION</td>

        </tr>
    </thead>
    <tbody>
        @forelse ($tickets as $ticket )




        <tr>
        <td>{{$tickets->id}}</td>
        <td>{{$$tickets->sujet}}</td>
        <td>{{$$tickets->created_dat}}</td>
        <td><button><a href="{{route('avion_detail',['n'=>$$tickets->id])}}">Detail</a></button></td>

    </tr>
    @empty
    <p>...</p>
    @endforelse
    </tbody>
</table>
@endsection
