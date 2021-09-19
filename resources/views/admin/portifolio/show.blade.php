@extends('layouts.app')
@section('title', 'Lista de Clientes')

@section('content')
    <div class="card container col-md-8">
        <table class="table table-hover text-center">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Operações</th>
            </thead>
            <tbody>
                @foreach ($portifolios as $portifolio)
                    
                    <tr>
                        <td>{{ $portifolio->id }}</td>
                        <td>{{ $portifolio->name }}</td>
                        <td class="row justify-content-center">
                            <a href="{{ route('portifolio.show', ['portifolio' => $portifolio->id]) }}" class="mr-2">
                                <button class="btn btn-primary">Ver</button>
                            </a>
                            <a href="{{ route('portifolio.edit', ['portifolio' => $portifolio->id]) }}" class="mr-2">
                                <button class="btn btn-success">Editar</button>
                            </a>
                            <form method="POST" action="{{ route('portifolio.destroy', ['portifolio' => $portifolio->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection