<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/user/insert" method="post">
        <input type="text" name="username">
        <button>提交</button>
        {{-- 防止跨站攻击   生成一个随机值的隐藏域（令牌）--}}
        {{ csrf_field() }}
    </form>
</body>
</html>
