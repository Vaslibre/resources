<div class="w-tags">
    <ol class="list-unstyled">
    @foreach($archives as $stats)
    @if($stats['month'] == '' && $stats['year'] == 0)
        @continue;
    @endif
        <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] .' '. $stats['year'] }}
            </a>
        </li>                            
    @endforeach
    </ol>
</div>