<div class="widget">
    <div class="w-title">
        <h5>
            SITIOS AMIGOS
        </h5>
        <hr>
    </div>
    <ul class="w-comments">
    @foreach($friends as $friend)
        <li>
            <a 
            href="{{ $friend->url_site }}/?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_content=textlink"
            title="Clic para visitar {{ $friend->titulo }}">
                {{ $friend->titulo }}
            </a><i class="fa fa-external-link fa-fw" aria-hidden="true"></i>
        </li>        
    @endforeach
    </ul>
</div>