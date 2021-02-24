<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$username}}</h1>
    <h2>{{$title}}</h2>
    <p>{{date('Y-m-d')}}</p>
    <p>{{$content}}</p>
    {{-- 如果是链接   需要变成{!!    !!} --}}
    <p>{!!$pages!!}</p>
</body>
</html>