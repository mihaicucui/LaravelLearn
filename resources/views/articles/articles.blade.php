<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>My First Heading</h1>
@foreach($articles as $article)
    <p>{{$article->title}}</p>
    <p>{{$article->body}}</p>
    <br>
@endforeach
</body>
</html>
