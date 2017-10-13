<div class="blog-list">    
    <div class="blog-post">
        @member($item->user->id)
            <div class="btn-group pull-right" role="group">
                <a href="{{ route('post.edit', $item->id) }}" type="button" class="btn btn-success text-capitalize">
                    editar publicación
                </a>
                @if($item->publicado == false)
                    <button type="button" class="btn btn-warning text-capitalize">
                        no publicado
                    </button>
                @endif
            </div>
        @endmember
        <h4 class="post-title">
            <a href="{{ $item->publicado == 0 ? '#0' : route($url, $item->url) }}">
                {{ $item->titulo }}
            </a>
        </h4>
        <ul class="post-meta">
            <li class="text-edit">
                <i class="fa fa-user"></i>
                Enviado por:
                <a href="{{ url('profile/'.$item->user->nickname) }}">
                    {{ $item->user->name }}
                </a>
            </li>
            <li class="text-edit">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 
                {{ $item->created_at->diffForHumans() }}
            </li>
        </ul>
        <p>{!! $item->intro !!}</p>
        @if($item->publicado == true)
            <a href="{{ route($url, $item->url) }}" class="btn btn-green m-t"> 
                Leer la publicación completa
            </a>
        @endif
    </div>
</div>