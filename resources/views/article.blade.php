@extends('layouts.app1')

@section('content')
<br>
<h1>{{ $article->content }}</h1>
<span>{{ $article->image ? $article->image->path : "Pas d'image"}}</span>

<hr><br>

@forelse ($article->comments as $comment)
<div>{{ $comment->content }} cree le {{ $comment->created_at->format('d m y') }}</div>
@empty
<span>Aucun commentaire</span>

@endforelse
@endsection