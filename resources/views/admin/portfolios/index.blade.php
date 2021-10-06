@extends('layouts.admin')
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
                @foreach ($portfolios as $portfolio)
                    
                    <tr>
                        <td>{{ $portfolio->id }}</td>
                        <td>{{ $portfolio->name }}</td>
                        <td class="row justify-content-center">
                            <a href="{{ route('portfolio.show', ['portfolio' => $portfolio->id]) }}" class="mr-2">
                                <button class="btn btn-primary">Ver</button>
                            </a>
                            <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" class="mr-2">
                                <button class="btn btn-success">Editar</button>
                            </a>
                            <form method="POST" action="{{ route('portfolio.destroy', ['portfolio' => $portfolio->id]) }}">
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