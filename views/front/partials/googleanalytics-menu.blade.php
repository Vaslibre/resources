<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-line-chart"></i>  
        {{ trans('googleanalytics::googleanalytics.analytics') }}
        <span class="caret"></span>
    </a>
   <ul class="dropdown-menu">
        <li>
            <a href="{{ url('analytics') }}">
                <i class="fa fa-pie-chart"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.analyticsbasic') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-mobile') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.mobile-traffic') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-returning') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.returningsessions') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-operating') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.operatingsystem') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-traffic') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.trafficsources') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-time-on-site') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.timeonsite') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-referring-sites') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.referringsites') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-search-engines') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.searchengines') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-keywords') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.keywords') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-topcontent') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.topcontent') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-top-landing-pages') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.toplandingpages') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ url('analytics-top-exit-pages') }}">
                <i class="fa fa-table"></i> 
                <span>{{ trans('googleanalytics::googleanalytics.topexitpages') }}</span>
            </a>
        </li>
    </ul>
</li>   