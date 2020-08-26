@csrf

<div class="form-group">
    <input class="form-control" type="text" name="name" value="{{ $theme->name ?? old('name') }}" placeholder="Tema da obra">
</div>  
<div class="form-group">
    <input type="submit" value="Gravar" class="btn btn-default">
</div>