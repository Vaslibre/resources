@extends('layouts.front')

@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            @foreach($result as $item)
                <div class="blog-list">    
                    <div class="blog-post">
                        <h4><a href="{{ route('blog', $item->url) }}">{{ $item->titulo }}</a></h4>
                        <ul class="post-meta">
                            <li class="text-edit">
                                <i class="fa fa-user"></i>
                                Enviado por:
                                <a href="#0">{{ $item->postea }}</a>
                            </li>
                            <li class="text-edit">
                                <i class="fa fa-comments"></i> <a href="#">4 comments</a>
                            </li>
                            <li class="text-edit">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 
                                {{ $item->created_at->format('d M Y') }}
                            </li>
                        </ul>
                        <p>{!! $item->intro !!}</p>
                        <a href="" class="btn btn-blue m-t"> Continue Reading</a>
                    </div>
                </div>
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