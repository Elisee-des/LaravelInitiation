@extends('layouts.app1')

@section('content')
<h1>Liste des articles</h1>
@if ($articles->count() > 0)
    
@foreach ($articles as $article)

<h2><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h2>

@endforeach
    <span>Aucun Post en base de donnee</span>
@else

@endif

@endsection