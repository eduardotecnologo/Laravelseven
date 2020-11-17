@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin')}}" class="breadcrumb-item active">Dashboard &nbsp/ &nbsp</a></li>
            <li><a href="{{ route('products.index') }}" class="breadcrumb-item active"> Produtos / &nbsp</a></li>
            <li><a href="{{ route('products.create') }}" class="breadcrumb-item"> Cadastrar / &nbsp</a></li>
        </ol>
    </nav>
     <label>Cadastrar novo Produto</label>
     @include('admin.includes.alerts')
    <div class="form-group">
    <form action="{{ route('products.store')}}" method="POST" class="form">
         @csrf
            <div class="form-groupo">
                <input type="text" name="name" placeholder="Nome do Produto" class="form-control">
            </div>
             <div class="form-groupo" style="margin-top: 10px;">
                <input type="text" name="url" placeholder="URL do Produto" class="form-control">
            </div>
            <div class="form-groupo" style="margin-top: 10px;">
                <select name="category_id" class="form-control">
                    {{-- Listando as Categorias --}}
                    <option value="">Escolha uma categoria</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-groupo" style="margin-top: 10px;">
                <input type="text" name="price" placeholder="Preço do Produto" class="form-control">
            </div>
            <div class="form-groupo" style="margin-top: 10px;">
                <input type="text" name="description" placeholder="Descrição do Produto" class="form-control">
            </div>
            <div class="form-groupo" style="margin-top: 10px;">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection


