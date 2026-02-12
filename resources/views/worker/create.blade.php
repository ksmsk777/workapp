<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Worker</h1>
    <hr>
    <div>
        <form action="{{route('worker.store')}}" method="POST">
            @csrf
            <div style="margin: 4px;"><input type="text" name="name" placeholder="Имя"></div>
            <div style="margin: 4px;"><input type="text" name="surname" placeholder="Фамилия"></div>
            <div style="margin: 4px;"><input type="email" name="email" placeholder="email"></div>
            <div style="margin: 4px;"><input type="number" name="age" placeholder="Возраст"></div>
            <div style="margin: 4px;"><textarea  name="description" placeholder="Информация"></textarea></div>
            <div style="margin: 4px;"><label style="margin: 4px;" for="is_married">В браке</label> <input id="is_married" type="checkbox" name="is_married"></div>
            <br>
            <div style="margin: 4px;"><input type="submit" value="Добавить"></div>
            <div></div>
        </form>
    </div>
    {{-- <br>
    <div>
        
        <p><div>
            <div> <strong>name:</strong> {{$worker->name}}</div>
            <div> <strong>Surname:</strong> {{$worker->surname}}</div>
            <div> <strong>Email:</strong> {{$worker->email}}</div>
            <div> <strong>Age:</strong> {{$worker->age}}</div>
            <div> <strong>description:</strong> {{$worker->description}}</div>
            <div> <strong>Is married:</strong> {{$worker->is_married}}</div>
            <div style="margin-top:10px">
                <a href="{{route('worker.show', $worker->id)}}">Просмотреть</a>
            </div>
        </div></p>         --}}
            
        
        <hr>
        
       


    </div>
</body>
</html>