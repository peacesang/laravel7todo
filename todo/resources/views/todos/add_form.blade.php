<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<form action="/todos/create" method="post">
    <p>
        
    Title: <input type="text" value="{{ old('title')}}" name="title" id="">
    @if($errors->has('title'))
        {{ $errors->first('title') }}
    @endif
</p>
    <p>
    description: <textarea name="description" value="{{ old('title')}}" id="" cols="30" rows="10"></textarea>
    @if($errors->has('description'))
    {{ $errors->first('description') }}
@endif
</p>
<p>
    Status: <br>
    <select name="status" id="">
        <option value=0>Pending</option>
        <option value=1>Done</option>

    </select>
</p>
    <input type="submit" value="add">
 @csrf
</form>
</body>
</html>