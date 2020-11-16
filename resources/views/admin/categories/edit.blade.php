@extends('layouts.app')

@section('title','Editar Categoria')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin')}}">Dashboard &nbsp/ &nbsp</a></li>
            <li><a href="{{ route('categories.index') }}" class="breadcrumb-item active"> Categorias / &nbsp</a></li>
            <li><a href=""> Produtos</a></li>
        </ol>
    </nav>
    <h3>
        Editar Categoria: {{$category->title}}
    </h3>
    {{-- Imprimindo Erros --}}
    @include('admin.includes.alerts')

    <form action="{{route('categories.update', $category->id)}}" method="POST" class="form">
        <input type="hidden" name="_method" value="PUT">
        {{-- Include Form --}}
        @include('admin.categories._partials.form')
    </form>
@stop
