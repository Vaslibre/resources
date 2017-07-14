{!! Form::model($album, [
    'route'     => $route,
    'method'    => $method,
    'enctype'   => 'multipart/form-data',
    'id'        => $idForm
]) !!}
    <fieldset>
        <div class="form-group">
            <label for="name">Category Name</label>
            {{ Form::text('name', $album->name,['class' => 'form-control', 'placeholder'=> 'Category Name', 'id' => 'albumname','name' => 'name']) }}
        </div>
        <div class="form-group">
            <label for="description">Category Description</label>
             {{ Form::textarea('description', $album->description,['class' => 'form-control', 'placeholder'=> 'Category Description', 'rows' => 3, 'id' => 'albumdescripcion', 'name' => 'description']) }}
        </div>
        @if($album->cover_image)
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="cover_image">Select a Cover Image</label>
                    {{ Form::file('cover_image', ['class' => 'form-control', 'id' => 'albumimage', 'name' => $image]) }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group"><br>
                    <p class="help-block text-center">
                        <a href="" class="btn btn-green btn-sm" data-toggle="modal" data-target="#myModal">
                            Ver Imagen Actual
                        </a>
                    </p>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            <img src="{{ asset('images/thumb/'.$album->cover_image) }}" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p class="help-block">Omita este paso si no va a cambiar la imagen de la categoria</p>
            </div>
        </div>
        <input type="hidden" name="cover_image" value="{{ $album->cover_image }}">
        @else
        <div class="form-group">
            <label for="cover_image">Select a Cover Image</label>
            {{ Form::file('cover_image', ['class' => 'form-control', 'id' => 'albumimage', 'name' => 'cover_image']) }}
        </div>
        @endif
        <div class="form-group">
            <label for="cover_image">Select Languaje</label>
            <select class="form-control text-capitalize" name="locale" id="locale">
                <option value=""></option>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <option value="{{ $localeCode }}" {{ ($album->locale == $localeCode) ? 'selected' : '' }}>
                    {{ $properties['native'] }}
                </option>
            @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-green" id="form-submit">
            {{ $button }}
        </button>
    </fieldset>

{!! Form::close() !!}

