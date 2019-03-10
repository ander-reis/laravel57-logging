@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categoria</h1>

        <div class="pt-5 pb-5">
            <a class="btn btn-outline-primary" href="{{ route('categories.create') }}">
                Cadastrar
            </a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col" class="text-center">Editar</th>
                <th scope="col" class="text-center">Excluir</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td class="text-center">
                        <a class="btn btn-outline-secondary" href="{{ route('categories.edit', $category) }}">
                            Editar
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger" type="submit">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
