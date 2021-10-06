@extends('layouts.admin')
@section('title', 'Lista de Clientes')

@section('content')
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
        <div class="mdc-card p-0">
            <h6 class="card-title card-padding p-4">Portfólios</h6>

            <div class="table-responsive">
                <table class="dashboard-table table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>Cliente</th>
                            <th>Tipo</th>
                            <th>Operações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td class="text-center">
                                    @if ($portfolio->file_type == 'image')
                                        <img src="{{ asset($portfolio->file) }}" alt="" class="rounded" width="70px" />
                                    @elseif ($portfolio->file_type == 'video')
                                        <video src="{{ asset($portfolio->file) }}" class="rounded" width="70px" height="70px" autoplay muted loop></video>
                                    @endif
                                </td>
                                <td>{{ $portfolio->name }}</td>
                                <td>{{ $portfolio->client ? $portfolio->client : 'Ñ definido' }}</td>
                                <td>{{ $portfolio->type ? $portfolio->type : 'Ñ definido' }}</td>
                                <td>
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}"
                                        class="mdc-button mdc-button--raised icon-button filled-button--info p-1 btn">
                                        <i class="material-icons mdc-button__icon">visibility</i>
                                    </a>
                                    
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                                        class="mdc-button mdc-button--raised icon-button filled-button--info p-1 btn">
                                        <i class="material-icons mdc-button__icon">edit</i>
                                    </a>
                                    
                                    <a href="#"
                                        onclick="
                                            event.preventDefault();
                                            swal({
                                                title: 'Aviso',
                                                text: 'Tem a certeza de que pretende eliminar este portfólio?',
                                                icon: 'warning',
                                                buttons: true,
                                                dangerMode: true,
                                            }).then(response => {
                                                if (response) {{ 'destroy_portfolio_' . $portfolio->id }}.submit()
                                            });
                                        "
                                        class="mdc-button mdc-button--raised icon-button filled-button--danger p-1 btn">
                                        <i class="material-icons mdc-button__icon">delete</i>
                                    </a>

                                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST"
                                        id="{{ 'destroy_portfolio_' . $portfolio->id }}">
                                        @csrf

                                        @METHOD('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="py-4 d-flex justify-content-center">
        {!! $portfolios->links() !!}
    </div>
@endsection
