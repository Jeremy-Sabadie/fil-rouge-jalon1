@extends('home')
@section('content')
    <h3>détail de l'avion</h3>
    <table>
        <thead>
            <tr>
                <td>AVNO</td>
                <td>AVNOM</td>
                <td>AVCAP</td>
                <td>AVLOC</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $avion->AVNO }}</td>
                <td>{{ $avion->AVNOM }}</td>
                <td>{{ $avion->AVCAP }}</td>
                <td>{{ $avion->AVLOC }}</td>
            </tr>
        </tbody>
    </table>
@endsection
