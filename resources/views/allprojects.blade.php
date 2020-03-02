<!DOCTYPE html>
<html lang="en">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Default</title>
</head>
​
<body>
    @foreach ($allProjects as $projects)
    <h1 class="content"> {{ $projects->projid }} </h1>
    <p class="content">{{ $projects ->projname}}</p>
    <p class="content">{{ $projects ->projdesc}}</p>
    <p>&nbsp;</p>
    @endforeach
</body>
​
</html>