@extends('layouts.app1')

@section('content')
<h1>Liste des articles</h1>
@if ($articles->count() > 0)
    
@foreach ($articles as $article)

<ul>
    <li><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a></li>
</ul>

@endforeach
@else
<span>Aucun Post en base de donnee</span>

@endif

@endsection