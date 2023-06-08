@extends('templates.home')
@section('content')
@include('components.detail_table')

@if ($user->role== 'admin')


@include('components.maj_status')
@else <p>vous n'avez pas les droits pour mettre à jour le status tu ticket</p>
@endif
@include('components.msg_display')
@endsection
