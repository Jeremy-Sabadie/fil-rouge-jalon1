@extends('templates.home')

@section('content')

    <h3>Tous vos tickets</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>SUJET</th>
                <th>STATUS</th>
                <th>créé le</th>
                <th>DETAIL</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tickets as $ticket)

                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->sujet }}</td>
                    <td>{{$ticket->label}}</td>
                    <td>{{ $ticket->created_dat }}</td>
                    <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
                </tr>
            @empty
                <p>Aucun ticket à ce jour</p>
            @endforelse
        </tbody>
    </table>
    @endsection
