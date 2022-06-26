<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('ui.titlee')}}</title>
</head>
<body>
    <div>
        <h1>{{__('ui.noii')}}</h1>
        <h2>{{__('ui.dati')}}:</h2>
        <p>{{__('ui.reg-name')}}: {{$user->name}}</p>
        <p>{{__('ui.log-email')}}: {{$user->email}}</p>
        <p>{{__('ui.desc')}}: {{$description}}</p>
        <p>{{__('ui.renrev')}}</p>
        <a href="{{route('createRevisor', $user)}}">{{__('ui.potere')}}</a>
    </div>
</body>
</html>