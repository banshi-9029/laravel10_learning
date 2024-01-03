@extends('layouts.app')
@section('content')
<p><a href="{{ route('articles.create') }}">記事を書く→</a></p>

<!--
@foreach ($articles as $article)
<article class="article-item">
    <div class="article-title">
        <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
    </div>
    <div class="article-info">{{ $article->created_at }}</div>
</article>
@endforeach
-->

@foreach ($articles as $article)
<article class="blog">
@component('commons.columMiddle')
@slot('colum_link')
{{ route('articles.show', $article) }}
@endslot
@slot('colum_title')
{{ $article->title }}
@endslot
@slot('colum_date')
{{ $article->created_at }}
@endslot
@endcomponent
</article>
@endforeach

@endsection()