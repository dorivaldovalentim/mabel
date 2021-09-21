@extends('layouts.app')
@section('title', 'Portifolio')

@section('content')
    <div class="card container col-md-8">
        <p>Portifolio: {{ $portifolio->name }}</p>
        <p>Descrição: {{ $portifolio->description }}</p>
        <p><img src="{{ asset('storage/'. Str::after($portifolio->file, 'public')) }}" width="40%"></p>
    </div>
@endsection