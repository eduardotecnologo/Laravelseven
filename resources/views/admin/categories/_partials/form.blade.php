@csrf
<div class="form-group">
    <input type="text" class="form-control" value="{{ $category->title ?? old('title')}}" name="title" placeholder="Título da Categoria">
    <small class="form-text text-muted">O Título da Categoria é obrigatório</small>
</div>
<div class="form-group">
    <input type="text" class="form-control" value="{{ $category->url ?? old('url')}}" name="url" placeholder="URL da categoria">
    <small class="form-text text-muted">A URL da categoria é obrigatório</small>
</div>
<div class="form-group">
    <input type="text" class="form-control"  value="{{ $category->description ?? old('description')}}" name="description" placeholder="A descrição da categoria é obrigatório">
</div>
<button type="submit" class="btn btn-success">Cadastrar</button>
