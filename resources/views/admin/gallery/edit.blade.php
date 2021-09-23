@extends('layouts.app')

@section('content')
    <div class="container col-md-8 col-lg-">
        <form action="{{ route('portifolio.update', ['portifolio' => $portifolio->id ]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>File</label>
                <input type="file" name="file" class="form-control">
            </div>
            <input type="submit" value="cadastrar" class="btn btn-primary">
        </form>
    </div>
@endsection