@extends('layouts.app')

@section('content')
<div class="title m-b-md">
    VETERINARIA
</div>
                
@if (isset($topic))
<p> Tema: {{ $topic}}</p>
@else
<p> Tema a definir </p>
@endif

<div class="links">
    @foreach ($links as $link => $text)
    <a href="{{ $link }}">{{ $text }}</a>
    @endforeach
</div>
@endsection