<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Worker</h1>
    <hr>
    <div>
        <form action="{{route('worker.update', $worker->id)}}" method="Post">
            @csrf
            @method('Patch')
            <div style="margin: 4px;"><input type="text" name="name" placeholder="Имя" value = "{{$worker->name}}"> </div>
            <div style="margin: 4px;"><input type="text" name="surname" placeholder="Фамилия"  value = "{{$worker->surname}}"></div>
            <div style="margin: 4px;"><input type="email" name="email" placeholder="email"  value = "{{$worker->email}}"></div>
            <div style="margin: 4px;"><input type="number" name="age" placeholder="Возраст" value = "{{$worker->age}}"> </div>
            <div style="margin: 4px;"><textarea  name="description" placeholder="Информация">{{$worker->description}}</textarea></div>
            <div style="margin: 4px;"><label style="margin: 4px;" for="is_married">В браке</label> <input id="is_married" type="checkbox" name="is_married" {{$worker->is_married ? ' checked' : ''}}></div>
            <br>
            <div style="margin: 4px;"><input type="submit" value="Сохранить"></div>
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