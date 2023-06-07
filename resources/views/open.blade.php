@extends('templates.home')
@section('content')
<h3>tickets en déclarés</h3>
@if (count($tickets) > 0)


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
                    <td>{{ $ticket->label }}</td>
                    <td>{{ $ticket->created_dat }}</td>
                    <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
                </tr>
            @empty
                <p>aucun tickets en cours</p>
            @endforelse
        </tbody>
    </table>
    @else
    @forelse ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->sujet }}</td>
                    <td><img src="/images/alerte.png" alt=""></td>
                    <td>{{ $ticket->created_dat }}</td>
                    <td><button type="button"><a href="{{ route('ticket_detail', ['n' => $ticket->id]) }}">Detail</a></button></td>
                </tr>
            @empty
                <p>aucun tickets en cours</p>
            @endforelse
        </tbody>
    </table>
    @endif
@endsection
