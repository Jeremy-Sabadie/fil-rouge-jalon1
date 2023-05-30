@extends('templates.home')

@section('content')

    <h3>Tous vos tickets</h3>
    <table>
        <thead>
            <tr>
                <th>ID_TICKET</th>
                <th>SUJET</th>
                <th>ID_STATUS</th>
                <th>DATE_CREATION</th>
                <th>DETAIL</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->sujet }}</td>
                    <td><img src="/images/alerte.png" alt=""></td>
                    <td>{{ $ticket->created_dat }}</td>
                    <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
                </tr>
            @empty
                <p>...</p>
            @endforelse
        </tbody>
    </table>
    @endsection
