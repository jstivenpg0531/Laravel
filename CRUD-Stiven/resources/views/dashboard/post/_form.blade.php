@csrf
@include('dashboard.partials.validation-error')

    <div class="form-group">
        <input class="form-control" type="text" name="publication" id="publication" placeholder="Publicación"
            value="{{ old('publication', $post->publication) }}">
    </div>
    <div class="form-group">
        <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
            <option selected disabled>Seleccionar una opcion</option>
            @foreach ($categories as $category => $id)
                <option {{ $post ->category_id == $id ? 'selected="selected"':''}} value="{{ $id }}">
                    {{ $category }}
                </option>
            @endforeach 
        </select>
    </div>
    <div class="form-group">
        <select class="custom-select" name="state" id="state">
            <option value="published" selected="selected">Publicado</option>
            <option value="unpublished" selected="selected">No publicado</option>
            <option value="received" selected="selected">Recibido</option>
        </select>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="publication_description" id="publication_description" cols="30" rows="10">
            {{ old('publication_description', $post->publication_description) }}
        </textarea>
    </div>


    <br>
<button type="submit" class="btn btn-success btn-sm">Guardar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>

