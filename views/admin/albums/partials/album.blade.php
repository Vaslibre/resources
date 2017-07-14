<tr>
    <td>{{ $album->id }}</td>
    <td>{{ $album->name }}</td>
    <td>{{ $album->description }}</td>
    <td class="text-capitalize">{{ $album->locale }}</td>
    <td>{{ count($album->photos) }} image(s)</td>
    <td>
    @if (Auth::user()->can('add_images'))
        <a class="btn btn-blue text-uppercase" href="{{ route('addimagetoalbum', $album->slug) }}" title="Add images to: {{ $album->name }}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    @else
        <a class="btn btn-blue text-uppercase" href="#0" title="You can't add images to: {{ $album->name }}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    @endif
    @if (Auth::user()->can('edit_albums'))
        <a class="btn btn-green text-uppercase" href="{{ route('album.edit', $album->slug) }}" title="Edit: {{ $album->name }}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a>
    @else
        <a class="btn btn-green text-uppercase" href="#0" title="You can't edit: {{ $album->name }}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a>
    @endif
    @if (Auth::user()->can('delete_albums'))
        <a class="btn btn-danger text-uppercase" href="#0" title="Delete: {{ $album->name }}?">
            <i class="glyphicon glyphicon-trash"></i>
        </a>
    @else
        <a class="btn btn-danger text-uppercase" href="#0" title="You can't delete: {{ $album->name }}?">
            <i class="glyphicon glyphicon-trash"></i>
        </a>
    @endif
    @if (Auth::user()->can('edit_images'))
        <a class="btn btn-warning text-uppercase" href="#0" title="Edit images">
            <i class="fa fa-file-image-o" aria-hidden="true"></i>
        </a>
    @else
        <a class="btn btn-warning text-uppercase" href="#0" title="You can't delete: {{ $album->name }}?">
            <i class="fa fa-file-image-o" aria-hidden="true"></i>
        </a>
    @endif
    </td>
</tr>