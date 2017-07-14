@extends('app')
@section('title') Album List @endsection
@push('styles')

<style>
.btn.btn-green {border: 1px solid #56B68B}.media-object{width: 136px;}.btn.btn-green:hover, .btn.btn-green:focus{border: 1px solid #56B68B}
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        "order": [[ 0, "desc" ]]
    });
} );
</script>
@endpush
@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">album list</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Admin Home</a></li>
                    <li><a href="{{ route('album.create') }}">create an album</a></li>
                    <li class="active">album list</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t p-y-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(count($albums) > 0)
                <table class="table table-hover" id="table_id">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Locale</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach($albums as $album)
                    @include('admin.albums.partials.album', ['album' => $album])
                @endforeach
                    </tbody>
                </table>
                @else
                <div class="page-header icon text-center">
                    <h1><i class="fa fa-frown-o" aria-hidden="true"></i> <small>There is no album</small></h1>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
