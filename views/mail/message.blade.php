@component('mail.master')
    {{-- Header --}}
    @slot('header')
        {{ config('app.name') }}
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © 2005 - {{ date('Y') }} {{ config('app.name') }}.
        @endcomponent
    @endslot
@endcomponent
