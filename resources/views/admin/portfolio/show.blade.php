@extends('layouts.admin')
@section('title', 'Portfolio')

@section('content')
    <div class="card container col-md-8">
        <p>Portfolio: {{ $portfolio->name }}</p>
        <p>Descrição: {{ $portfolio->description }}</p>
        <p><img src="{{ asset('storage/'. Str::after($portfolio->file, 'public')) }}" width="40%"></p>
    </div>
@endsection