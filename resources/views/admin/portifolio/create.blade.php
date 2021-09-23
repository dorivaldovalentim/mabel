@extends('layouts.admin')

@section('content')
    <div class="container col-md-8 col-lg-">
            <form action="{{ route('portifolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tipo de Ficheiro</label>
                    <select name="typeFile" class="form-control">
                        <option>Video</option>
                        <option>Imagem</option>
                    </select>
                </div>
                <input type="submit" value="cadastrar" class="btn btn-primary">
            </form>
    </div>
@endsection