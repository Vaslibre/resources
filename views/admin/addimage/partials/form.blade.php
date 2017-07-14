{!! Form::model($album, [
    'route'     => $route, 
    'method'    => $method, 
    'enctype'   => 'multipart/form-data', 
    'id'        => 'addimage'
]) !!}
    <fieldset>
        <div class="form-group">
            <label class="sr-only" for="image">Select a Cover Image</label>
            {{ Form::file('cover_image', ['class' => 'form-control', 'id' => 'image', 'name' => 'image']) }}
        </div>
        <button type="submit" class="btn btn-green" id="form-submit">
            {{ $button }}
        </button>
        {{ Form::hidden('albumid', $id, ['id' => 'albumid']) }}
    </fieldset>
{!! Form::close() !!}