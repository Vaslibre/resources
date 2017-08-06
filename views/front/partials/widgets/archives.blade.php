<div class="w-tags">
    <ol class="list-unstyled">
    @foreach($archives as $stats)
    @if($stats['month'] == '' && $stats['year'] == 0)
        @continue;
    @endif
        <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_term=publicaciones%2Bde%2B{{ $stats['month'] }}%2B{{ $stats['year'] }}&utm_content=textlink">
                {{ $stats['month'] .' '. $stats['year'] }}
            </a>
        </li>
    @endforeach
    </ol> 
</div>