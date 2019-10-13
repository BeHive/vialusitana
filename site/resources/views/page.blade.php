@extends('layouts.app')

@section('content')
    <div class="row titleBar mb-5">
        <div class="col-md-6 text-right">
            <h2>{{ $page->title1 }}</h2>
            <h2>{{ $page->title2 }}</h2>
        </div>
        <div class="col-md-6 subTitle mb-2">
            {!! $page->subtitle !!}
        </div>
    </div>

    <div class="row">
        <aside class="col-md-3 pageImage">
            @if($page->image1)
                <img src="/storage/{{ $page->image1 }}">
            @endif
            @if($page->image2)
                <img src="/storage/{{ $page->image2 }}">
            @endif
        </aside>
        <div class="col-md-9 bodyContent">
            <p>{!! $page->body !!}</p>
        </div>
    </div>
@endsection
