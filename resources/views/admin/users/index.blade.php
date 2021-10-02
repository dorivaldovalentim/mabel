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
                            <th>Acções</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                        <i class="material-icons mdc-button__icon">edit</i>
                                    </a>

                                    <a href="{{ route('user.destroy', $user->id) }}"
                                        onclick="
                                            event.preventDefault();
                                            confirm('Sério?') ? {{ 'destroy_user_' . $user->id }}.submit() : '';
                                        "
                                        class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                        <i class="material-icons mdc-button__icon">delete</i>
                                    </a>

                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" id="{{ 'destroy_user_' . $user->id }}">
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

@endsection
