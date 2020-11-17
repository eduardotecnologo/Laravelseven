@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('categories.create')}}"
           style="margin-top:10px;
                  margin-bottom: 10px;"
           class="btn btn-success">Nova Categoria</a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin')}}">Dashboard &nbsp/ &nbsp</a></li>
                <li><a href="{{ route('categories.index') }}" class="breadcrumb-item active"> Categorias / &nbsp</a></li>
                <li><a href=""> Produtos</a></li>
            </ol>
        </nav>
        <form action="{{route('categories.search')}}" method="POST" class="form form-inline" style="margin-bottom: 10px;">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="Pesquisar Título" value="{{ $data['title'] ?? '' }}" style="margin-right: 10px;">
            <input type="text" name="url" class="form-control" placeholder="Pesquisar URL" value="{{ $data['url'] ?? '' }}" style="margin-right: 10px;">
            <input type="text" name="description" class="form-control" placeholder="Pesquisar Descrição" value="{{ $data['description'] ?? '' }}" style="margin-right:12px;">
            <button class="btn btn-success">Buscar</button>
        </form>
        @if(isset($data))
            <a href="{{ route('categories.index') }}">(X) Limpar pesquisa:</a>
        @endif

    </div>
            <div class="box-body">
                @include('admin.includes.alerts')
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">URL</th>
                        <th scope="col">Descrição</th>
                        <th width="150px" scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->url }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="badge bg-yellow">
                                    Editar
                                </a>
                                <a href="{{ route('categories.show', $category->id) }}" class="badge bg-primary">
                                    Detalhes
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if(isset($data))
                    {!! $categories->appends($data)->links() !!}
                @else
                    {!! $categories->links() !!}
                @endif

            </div>
@endsection


