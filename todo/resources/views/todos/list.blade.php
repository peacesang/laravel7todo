<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/todos/create">add new</a>
    <h1>this is list</h1>
    @if(Session::has('message'))
     {{ Session::get('message') }}
    @endif
    @foreach ($tasks as $task)
        <div>
        
        <h2>{{ $task->title}}</h2>
        <p> status: {{ $task->label}} </p>
            
        <p> created on : {{$task->created_at}}
    <p>{{$task->description}}</p>

        <form action="/todos/{{ $task->id }}" method="post">
            <input type="submit" value="delete">
            @csrf
            @method('DELETE')
        </form>
    <a href="/todos/{{$task->id}}/edit">edit</a>
        </div>
        
    @endforeach
</body>
</html>