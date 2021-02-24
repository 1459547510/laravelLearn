<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        //原生的解析
        var obj=JSON.parse('{"name":"xiaohong","age":32}');
        console.log(obj);

    </script>
    {{-- 不加download  属性  会直接显示内容    加上之后会进行下载 --}}
    <a href="/request.log" download="">下载</a>
</body>
</html>