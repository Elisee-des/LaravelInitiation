@extends('layouts.app1')

@section('content')
<h1>Creation d'un nouvel article</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="red">{{ $error }}</div>
    @endforeach
    
@endif

<form action="{{ route('articles.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <textarea name="content" cols="30" rows="10"></textarea>
    <button type="submit" class="btn-danger">Creer</button>
</form>

@endsection