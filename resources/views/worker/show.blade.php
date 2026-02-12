<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Worker {{$worker->surname}}</h1>
    <hr>
    <br>
    <div>

        <p><div>
            <div> <strong>name:</strong> {{$worker->name}}</div>
            <div> <strong>Surname:</strong> {{$worker->surname}}</div>
            <div> <strong>Email:</strong> {{$worker->email}}</div>
            <div> <strong>Age:</strong> {{$worker->age}}</div>
            <div> <strong>description:</strong> {{$worker->description}}</div>
            <div> <strong>Is married:</strong> {{$worker->is_married}}</div>
            <div style="margin-top:10px">
                <a style="" href="{{route('worker.index')}}">Вернуться</a>
            </div>
        </div></p>        
             <hr>



    </div>
</body>
</html>