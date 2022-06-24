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
        <h1>Congratulazioni {{$user->name}} la tua richiesta è stata accettata!</h1>
        <br>
        <h2>Benvenuto nella famiglia di Presto</h2>
        <br>
        <a href="{{route('login')}}">Effettua il login ed inizia subito a revisionare annunci</a>
    </div>
</body>
</html>