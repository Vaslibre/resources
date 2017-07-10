<?php print '<?xml version="1.0" encoding="iso-8859-1" ?>'; ?>

<feed xmlns="http://www.w3.org/2005/Atom">

    <title>{{ config('app.name') }}</title>
    <link href="{{ config('app.url') }}" rel="alternate"/>
    <link href="{{ route('rss') }}" rel="self"/>
    <id>{{ config('app.url') }}</id>
    <updated><?php echo date('Y-m-d\TH:i:sP'); ?></updated>

    @foreach ($posts as $post)

    <entry>
        <title><![CDATA[@utf8Decode($post->titulo)]]></title>

        <link href="{{ route('blog', $post->url) }}" rel="alternate"/>
        <published>{{ $post->created_at->format('Y-m-d\TH:i:sP') }}</published>
        <updated>{{ $post->updated_at->format('Y-m-d\TH:i:sP') }}</updated>
        <author>
            <name><![CDATA[{{ config('app.name') }}]]></name>
        </author>
        <id>{{ route('blog', $post->url) }}</id>        
        <summary type="html"> <![CDATA[@utf8Decode($post->intro)]]></summary>
        <content type="html">
            <![CDATA[@utf8Decode($post->texto)]]>
        </content>
    </entry>

    @endforeach
    
</feed>