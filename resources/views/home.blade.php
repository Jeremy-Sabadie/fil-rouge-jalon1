@extends('templates.home')
@section('content')
<p>bonjour {{auth()->user()->name}}</p>
<form action="{{ route('new_ticket') }}" method="GET">
<button type="submit" class="btn-danger">déclarer un  nouveau ticket</button>
</form>
@endsection()
