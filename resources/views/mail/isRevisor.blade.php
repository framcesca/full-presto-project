<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>{{__('ui.congrats')}} {{$user->name}}{{__('ui.accettata')}}</h1>
        <br>
        <h2>{{__('ui.selodicitu')}}</h2>
        <br>
        <a href="{{route('login')}}">{{__('ui.ecco')}}</a>
    </div>
</body>
</html>