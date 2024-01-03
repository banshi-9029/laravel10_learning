<link rel="stylesheet" href="/css/top.css">
@extends('layouts.app')
@section('content')
<div class="top-colum">
    <div class="top-colum-up">
        <div class="top-colum-up-detail">
            @component('commons.columBig')
            @slot('colum_link')
            /articles
            @endslot
            @slot('colum_title')
            ブログ
            @endslot
            @endcomponent
        </div>
        <div class="top-colum-up-detail">
            @component('commons.columBig')
            @slot('colum_link')
            /calendar
            @endslot
            @slot('colum_title')
            カレンダー
            @endslot
            @endcomponent
        </div>
        <div class="top-colum-up-detail">
            @component('commons.columBig')
            @slot('colum_link')
            /top
            @endslot
            @slot('colum_title')
            サンプル
            @endslot
            @endcomponent
        </div>
    </div>
</div>
@endsection()