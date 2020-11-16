@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('categories.create')}}"
           style="margin-top: 10px;
                  margin-bottom: 10px;"
           class="btn btn-success">Nova Categoria</a>
        <form action="{{route('categories.search')}}" method="POST" class="form form-inline" style="margin-bottom: 10px;">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="Pesquisar Título" style="margin-right: 10px;">
            <input type="text" name="url" class="form-control" placeholder="Pesquisar URL" style="margin-right: 10px;">
            <input type="text" name="description" class="form-control" placeholder="Pesquisar Descrição" style="margin-right:12px;">
            <button class="btn btn-success">Buscar</button>
        </form>
        @if(isset($search))
            <p><strong>Resultado para: </strong>{{ $search }}</p>
        @endif

    </div>
            <div class="box-body">
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
            </div>
@endsection


