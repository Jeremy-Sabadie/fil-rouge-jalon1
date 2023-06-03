@extends('templates.home')
@section('content')
@if ($user->role== 'admin')


@include('components.maj_status')
@else <p>vous n'avez pas les droits pour voir ça</p>
@endif
@endsection

