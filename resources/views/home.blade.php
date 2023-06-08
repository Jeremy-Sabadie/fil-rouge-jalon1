@extends('templates.home')
@section('content')

<form action="{{ route('new_ticket') }}" method="GET">
@csrf
<button type="submit" class="btn-danger">déclarer un  nouveau ticket</button>
</form>
@endsection()
sear
