<div class="widget">
    <div class="w-title">
        <h5>
            publicaciones populares
        </h5>
        <hr>
    </div>
    <ul class="w-comments">
    @foreach ($popular as $post)
        <li>
            <a 
            href="{{ $post['url'] }}/?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_content=textlink"
            title="Clic para leer más">
                {{ $post['pageTitle'] }}
            </a>
        </li>        
    @endforeach
    </ul>
</div>