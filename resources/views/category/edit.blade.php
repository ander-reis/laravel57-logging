@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar</h1>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @method('PUT')
            @csrf
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" placeholder="Nome">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection

