@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin')}}">Dashboard &nbsp/ &nbsp</a></li>
            <li><a href="{{ route('categories.index') }}" class="breadcrumb-item active"> Categorias / &nbsp</a></li>
            <li><a href=""> Produtos</a></li>
        </ol>
    </nav>
    <div class="container-fluid">
        <label>
            Cadastrar nova Categoria
        </label>
    </div>
    <div class="box-body">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('categories.store') }}" class="form" method="POST">
            {{-- Include Form --}}
            @include('admin.categories._partials.form')
        </form>
    </div>
@endsection


