
@extends('home')
@section('content')
<h3>liste des avions</h3>
<table>
    <thead>
        <tr>
            <td>AVNO</td>
            <td>AVNOM</td>
            <td>AVCAP</td>
            <td>DETAIL</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($avions as $avion )




        <tr>
        <td>{{$avion->AVNO}}</td>
        <td>{{$avion->AVNOM}}</td>
        <td>{{$avion->AVCAP}}</td>
        <td><button><a href="{{route('avion_detail',['n'=>$avion->AVNO])}}">Detail</a></button></td>

    </tr>
    @empty
    <p>...</p>
    @endforelse
    </tbody>
</table>
@endsection
