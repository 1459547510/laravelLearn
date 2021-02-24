<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>控制
    </title>
</head>
<body>
    <h2>流程控制</h2>
    @if ($isVip)
        <span>VIP</span>
    @endif

    <h2>循环控制</h2>
    <h2>选择题</h2>
    207最善良的男生
    <ul>
    @foreach ($classmates as $item)
        <li name="item">{{$item}} <input type="radio" name="boy"></li>
    @endforeach
    </ul>
</body>
</html>