@extends('layouts.admin')

@section('title', 'Funcionários')

@section('content')


    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
        <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">Usuários</h6>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Estado</th>
                            @if (isSuperAdmin())<th>Username</th>@endif
                            <th>Acções</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id - 1 }}</td>
                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <i class="material-icons mdc-button__icon {{ $user->deleted_at ? 'text-danger' : 'text-success' }}">favorite</i>
                                </td>
                                
                                @if (isSuperAdmin())
                                    <td>{{ $user->username }}</td>
                                @endif

                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="mdc-button mdc-button--raised icon-button filled-button--info p-1 btn">
                                        <i class="material-icons mdc-button__icon">edit</i>
                                    </a>

                                    @if (!$user->deleted_at)
                                        <a href="#"
                                            onclick="
                                                event.preventDefault();
                                                swal({
                                                    title: 'Aviso',
                                                    text: 'Tem certeza de que pretende remover este usuário?',
                                                    icon: 'warning',
                                                    buttons: true,
                                                    dangerMode: true,
                                                }).then(response => {
                                                    if (response) {{ 'destroy_user_' . $user->id }}.submit()
                                                });
                                            "
                                            class="mdc-button mdc-button--raised icon-button filled-button--secondary p-1 btn">
                                            <i class="material-icons mdc-button__icon">delete</i>
                                        </a>

                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" id="{{ 'destroy_user_' . $user->id }}">
                                            @csrf

                                            @METHOD('delete')
                                        </form>
                                    @endif

                                    @if ($user->deleted_at)
                                        <a href="#"
                                            onclick="
                                                event.preventDefault();
                                                swal({
                                                    title: 'Aviso',
                                                    text: 'O usuário vai voltar a ter acesso a plataforma?',
                                                    icon: 'warning',
                                                    buttons: true,
                                                    dangerMode: true,
                                                }).then(response => {
                                                    if (response) {{ 'restore_user_' . $user->id }}.submit()
                                                });
                                            "
                                            class="mdc-button mdc-button--raised icon-button filled-button--success p-1 btn">
                                            <i class="material-icons mdc-button__icon">delete</i>
                                        </a>

                                        <form action="{{ route('user.restore', $user->id) }}" method="POST" id="{{ 'restore_user_' . $user->id }}">
                                            @csrf

                                            @METHOD('delete')
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
