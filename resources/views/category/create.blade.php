@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar</h1>
        {{dd($category)}}
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>
@endsection
