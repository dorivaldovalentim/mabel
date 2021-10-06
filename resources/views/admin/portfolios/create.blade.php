@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title">Cadastrar portfólio</span>
        </div>

        <div class="card-body">
            <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="client">Nome do Cliente</label>
                        <input type="text" name="client" id="client"
                            class="form-control @error('client') is-invalid @enderror" />

                        @error('client')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="type">Tipo de portfólio</label>

                        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                            @foreach (['Geral', 'Vídeo Clipe', 'Video Lyric', 'Spot Publicitário', 'Vídeo Comercial', 'Vídeo de Casamento'] as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>

                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="file_type">Tipo de Ficheiro</label>

                        <select name="file_type" id="file_type"
                            class="form-control @error('file_type') is-invalid @enderror"
                            onchange="document.querySelector('#file').setAttribute('accept', this.value + '/*')">
                            <option value="image">Imagem</option>
                            <option value="video">Video</option>
                        </select>

                        @error('file_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="file">Foto ou vídeo de capa</label>

                        <div class="custom-file">
                            <label class="custom-file-label">Foto ou vídeo de capa</label>
                            <input type="file" name="file" id="file"
                                class="custom-file-input @error('file') is-invalid @enderror" accept="image/*" />

                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description"
                            class="form-control @error('description') is-invalid @enderror"></textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="begins_at">Data de Início</label>
                        <input type="date" name="begins_at" id="begins_at"
                            class="form-control @error('begins_at') is-invalid @enderror" />

                        @error('begins_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ends_at">Data de Término</label>
                        <input type="date" name="ends_at" id="ends_at"
                            class="form-control @error('ends_at') is-invalid @enderror" />

                        @error('ends_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
