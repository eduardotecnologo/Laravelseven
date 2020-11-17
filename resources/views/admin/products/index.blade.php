@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('products.create')}}"
        style="margin-top:10px;
                  margin-bottom: 10px;"
           class="btn btn-success">Novo Produto</a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin')}}">Dashboard &nbsp/ &nbsp</a></li>
                <li><a href="{{ route('products.index') }}" class="breadcrumb-item active"> Produtos / &nbsp</a></li>
                <li><a href=""> Produtos</a></li>
            </ol>
        </nav>
        @if(isset($data))
            <a href="{{ route('products.index') }}">(X) Limpar pesquisa:</a>
        @endif

    </div>
            <div class="box-body">
                @include('admin.includes.alerts')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                        <th width="150px" scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->name }}</th>
                            <td>{{ $product->category->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="badge bg-yellow">
                                    Editar
                                </a>
                                <a href="{{ route('products.show', $product->id) }}" class="badge bg-primary">
                                    Detalhes
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection


