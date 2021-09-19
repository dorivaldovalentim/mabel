@extends('layouts.app')
@section('title', 'Portifolio')

@section('content')
    <div class="card container col-md-8">
        <p>Portifolio: {{ $portifolio->name }}</p>
        <p>Descrição: {{ $portifolio->description }}</p>
        <p>File: {{ $portifolio->file }}</p>
        <p>Tipo de File: {{ $portifolio->typeFile }}</p>
    </div>
@endsection