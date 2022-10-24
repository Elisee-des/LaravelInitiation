@extends('layouts.app1')

@section('content')
<h1>Liste des articles</h1>
@foreach ($articles as $article)
<h2><a href="#">{{ $article }}</a></h2>
@endforeach
@endsection