@extends('layouts.app')
@section('title', 'Lista de Clientes')

@section('content')
    <div class="card container col-md-8">
        @foreach ($galleries as gallery)
            <img src="{{ asset('public') }}" alt="">
        @endforeach
    </div>
@endsection