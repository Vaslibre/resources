<?php print '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<rss version="2.0">
    <channel>
        <title>{{ config('app.name') }}</title>
        <link>{{ config('app.url') }}</link>
        <description>{{ config('app.name') }} RSS feed</description>

        <language>es</language>
        <pubDate><?php echo date('D, d M Y H:i:s T'); ?></pubDate>
        <lastBuildDate><?php echo date('D, d M Y H:i:s T'); ?></lastBuildDate>

        <docs>{{ route('rss') }}</docs>
        <copyright>(c) 2005 - {{ date('Y') }} {{ config('app.name') }}.</copyright>
        <managingEditor>webmaster@vaslibre.org.ve</managingEditor>

        <webMaster>webmaster@vaslibre.org.ve</webMaster>
    @foreach ($posts as $post)

        <item>
            <title>@utf8Decode($post->titulo)</title>
            <link>{{ route('blog', $post->url) }}</link>
            <description>@utf8Decode($post->intro)</description>
            <description><![CDATA[ @utf8Decode($post->texto) ]]></description>
            <pubDate>{{ $post->created_at->format('D, d M Y H:i:s T') }}</pubDate>
            <guid>{{ $post->id }}</pubDate>
        </item>

    @endforeach

    </channel>
</rss>