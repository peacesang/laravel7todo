<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit todo</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<form action="/todos/{{$todo->id}}" method="post">
    <p>
        
    Title: <input type="text" value="{{ $todo->title }}" name="title" id="">
    @if($errors->has('title'))
        {{ $errors->first('title') }}
    @endif
</p>
    <p>
    description: <textarea name="description" value="" id="" cols="30" rows="10">{{ $todo->description }}</textarea>
    @if($errors->has('description'))
    {{ $errors->first('description') }}
@endif
</p>
<p>
    Status: <br>
    <select name="status" id="">
        <option value=0 {{ ($todo->status==0)?"selected":""}}>Pending</option>
        <option value=1 {{ ($todo->status==1)?"selected":""}}>Done</option>

    </select>
</p>
@csrf
 @method('PUT')
    <input type="submit" value="update">
 
</form>
</body>
</html>