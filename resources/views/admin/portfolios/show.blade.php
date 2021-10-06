@extends('layouts.admin')
@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="card" style="width: 30rem">
            @if ($portfolio->file_type == 'image')
                <img src="{{ asset($portfolio->file) }}" alt="" class="card-img-top" />
            @elseif ($portfolio->file_type == 'video')
                <video src="{{ asset($portfolio->file) }}" class="card-img-top" controls></video>
            @endif
    
            <div class="card-body">
                <h5 class="card-title">{{ $portfolio->name }}</h5>
                <p class="card-text">Cliente: {{ $portfolio->client }}</p>
                <p class="card-text">Tipo de portfólio: {{ $portfolio->type }}</p>
                <p class="card-text">{{ $portfolio->description }}</p>
            </div>
        </div>
    </div>

@endsection