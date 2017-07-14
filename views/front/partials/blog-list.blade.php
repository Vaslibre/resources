
    <div class="blog-list">    
        <div class="blog-post">
            <h4 class="post-title">
                <a href="{{ route($url, $item->url) }}">
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
                    {{ $item->created_at->format('d M Y') }}
                </li>
            </ul>
            <p>{!! $item->intro !!}</p>
            <a href="{{ route($url, $item->url) }}" class="btn btn-green m-t"> Leer la publicación completa</a>
        </div>
    </div>