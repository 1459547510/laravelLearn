<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (\Session::has('error'))
    <?php echo \Session::get('error') ?>
    @else
    
    @endif
    <form action="/user-2" method="post">
        <input type="text " name="username" value="{{old('username')}}">
        <input type="text" name="password" value="{{old('password')}}">
        @csrf
        <button>提交</button>
    </form>
</body>
</html>