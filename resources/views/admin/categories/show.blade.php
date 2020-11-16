@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin')}}">Dashboard &nbsp/ &nbsp</a></li>
            <li><a href="{{ route('categories.index') }}"> Categorias / &nbsp</a></li>
            <li><a href="{{ route('categories.index') }}" class="breadcrumb-item active"> Detalhes / &nbsp</a></li>
            <li><a href=""> Produtos</a></li>
        </ol>
    </nav>
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
