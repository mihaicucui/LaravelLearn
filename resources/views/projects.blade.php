<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>Projects</h1>
@foreach($projects as $project)
<p>{{$project->id}}</p>
@endforeach
</body>
</html>
