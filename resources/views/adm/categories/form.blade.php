@csrf

<div class="form-group">
    <input class="form-control" type="text" name="name" value="{{ $category->name ?? old('name') }}" placeholder="Nome da Categoria">
</div>  
<div class="form-group">
    <input type="submit" value="Gravar" class="btn btn-default">
</div>