@extends('layouts.front')

@section('title', 'Listado de notas publicadas')

@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">Administrar notas publicadas</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li class="active">
                        Listado de notas publicadas
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t p-y">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    Listado de notas publicadas
                </h3>
            </div>
            <div class="col-md-12">
                <div class="result-set">
                    <table class="table table-bordered table-striped table-hover" id="data-table">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Intro</th>
                            <th>Usuario</th>
                            <th class="text-center">Actiones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->intro }}</td>                                
                                <td>
                                    <a href="{{ url('profile/'.$item->user->nickname) }}" target="_blank">
                                        {{ $item->user->name }}
                                    </a>                                
                                </td>
                                <td class="text-center">
                                    @include('admin.post.partials._actions', [
                                        'entity' => 'post',
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