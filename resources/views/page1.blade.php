<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="height: 100px;background:#eee" ></header>
    {{-- section   and     show   给页面内容做标记  以至于在新页面可以自定义--}}
@section('content')
    <section style="height: 400px;background:#908"></section>
@show
    <footer style="height: 100px;background:rgb(48, 46, 46)" ></header>

</body>
</html>