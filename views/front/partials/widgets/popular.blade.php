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
            <i class="fa fa-link" aria-hidden="true"></i>
            <a href="{{ $post['url'] }}/?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_content=textlink">
                {{ $post['pageTitle'] }}
            </a>
        </li>        
    @endforeach
    </ul>
</div>