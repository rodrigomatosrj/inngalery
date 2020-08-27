@csrf

<div class="form-group">
    <input class="form-control" type="text" name="name" value="{{ $artist->name ?? old('name') }}" placeholder="Nome do Artista">
</div>  
<div class="form-group">
    <input class="form-control" type="file" name="image" placeholder="Imagem do Artista">
</div>  
<div class="form-group">
    <textarea class="form-control" name="biography" placeholder="Nome do Artista">       
        {{ $artist->name ?? old('name') }} 
    </textarea>
</div>  

<div class="form-group">
    <input type="submit" value="Gravar" class="btn btn-default">
</div>