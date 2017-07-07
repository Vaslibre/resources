@extends('layouts.front')

@section('title','Publicaciones')
@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            @foreach($result as $item)
                @include('front.partials.blog-list', ['item' => $item, 'url' => 'notas'])
            @endforeach
                <div class="text-center">
                    {!! $result->links() !!}
                </div>
            </div>
            <div class="col-md-4">
            @include('front.partials.widgets.widgets')           
            </div>
        </div>
    </div>
</section>
@endsection