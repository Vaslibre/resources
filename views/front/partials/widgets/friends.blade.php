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
            <i class="fa fa-link" aria-hidden="true"></i> 
            Visita la web de: 
            <a href="{{ $friend->url_site }}/?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_content=textlink">
                {{ $friend->titulo }}
            </a>
        </li>        
    @endforeach
    </ul>
</div>