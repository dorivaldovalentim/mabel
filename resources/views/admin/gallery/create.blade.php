@extends('layouts.app')

@section('content')
    <div class="container col-md-8 col-lg-">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>File</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>
            <input type="submit" value="cadastrar" class="btn btn-primary">
        </form>
    </div>
@endsection