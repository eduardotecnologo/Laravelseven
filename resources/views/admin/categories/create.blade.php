@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h3>
            Cadastrar nova Categoria
        </h3>
        <hr>
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


