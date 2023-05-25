@extends('templates.home')

@section('content')
    @isset($message)
        {{ $message }}
    @endif
    @include('components.create_form')
@endsection
