@csrf

<div class="form-group">
    <input class="form-control" type="text" name="name" value="{{ $colour->name ?? old('name') }}" placeholder="Cor da obra">
</div>  
<div class="form-group">
    <input type="submit" value="Gravar" class="btn btn-default">
</div>