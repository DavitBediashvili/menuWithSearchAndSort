<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($table as $each)
        <h3>{{$each['id']}} {{$each['name']}} {{$each['order']}} {{$each['type']}}</h3>
        <form method='POST'>
        @csrf
        <button  name="delete" value="{{$each['id']}}">delete</button>

        <input type="text" name="name" placeholder="name">
        <button  name="nameB" value="{{$each['id']}}">Submit</button>

        <input type="number" name="order" placeholder="order">
        <button  name="orderB" value="{{$each['id']}}">Submit</button>

        <input type="text" name="type" placeholder="type">
        <button  name="typeB" value="{{$each['id']}}">Submit</button>

        </form>
    @endforeach
    <br><br>
    
    <form   method="POST">
    @csrf
    
    <input type="text" name="nameChange" placeholder="name">

    <input type="number" name="orderChange" placeholder="order">

    <input type="text" name="typeChange" placeholder="type">

    <button  name="Change" value="id">Submit</button>

    </form>
</body>
</html>