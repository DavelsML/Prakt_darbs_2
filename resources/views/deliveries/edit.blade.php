<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a delivery</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>



        @endif
    </div>
    <form method="post" action="{{route('delivery.update', ['delivery' => $delivery])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$delivery->name}}" />
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="Description" value="{{$delivery->description}}" />
        </div>
        <div>
            <label>Delivery person</label>
            <input type="text" name="idnum" placeholder="ID num" value="{{$delivery->idnum}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>