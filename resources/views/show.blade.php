<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($list_send as $each)
    <h1>{{$each[0]['type']}}</h1>

        @foreach($each as $food)

        <h3>{{$food['order']}} {{$food['name']}}</h3>

        @endforeach

        <form   method="POST">
        @csrf
        <button name="go" value="{{$each[0]['type']}}">See Full List</button>
        </form>

    @endforeach
    <br><br>

    <form   action='/admin' method="POST">
    @csrf
    <button name="admin">Go Admin</button>
    </form>

    <br><br>

    <form   method="POST">
    @csrf

    <input type="text" name="nameSearch" placeholder="search">

    <button  name="nameSearchB" value='a'>Submit</button>

    </form>

</body>
</html>