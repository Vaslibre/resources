@extends('layouts.front')

@section('title', 'Banner')

@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">Administrar banners</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li class="active">Administrar Banners</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t p-y">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>
                    Listado de banners registrados
                </h3>
            </div>
            <div class="col-md-2 page-action text-right">
                <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm"> 
                    Agregar Banner
                </a>
            </div>
            <div class="col-md-12">
                <div class="result-set">
                    <table class="table table-bordered table-striped table-hover" id="data-table">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Url Site</th>
                            <th>Url Banner</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->url_site }}</td>
                                <td>{{ $item->url_banner }}</td>
                                <td class="text-center">
                                    @include('admin.banner.partials._actions', [
                                        'entity' => 'banner',
                                        'id' => $item->id
                                    ])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {{ $result->links() }}
                    </div>
                </div>
            </div>              
        </div>
    </div>
</section>
@endsection