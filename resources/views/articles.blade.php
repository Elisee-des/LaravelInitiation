<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    @foreach ($articles as $article)
    <h2>{{ $article }}</h2>
    @endforeach
</body>
</html>