@extends('layouts.app')

@section('content')
    <h3>
        Detalhes da Categoria: {{$category->title}}
    </h3>
        <div class="box-body">
            <p><strong>ID: </strong>{{ $category->id }}</p>
            <p><strong>Título: </strong>{{ $category->title }}</p>
            <p><strong>URL: </strong>{{ $category->url }}</p>
            <p><strong>Descrição: </strong>{{ $category->description }}</p>
            <hr>
            <form action="{{ route('categories.destroy', $category->id) }}" class="form" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
@stop
