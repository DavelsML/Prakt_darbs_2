<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a delivery</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>



        @endif
    </div>
    <form method="post" action="{{route('delivery.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="Description"/>
        </div>
        <div>
            <label>Delivery person</label>
            <input type="text" name="idnum" placeholder="ID num"/>
        </div>
        <div>
            <input type="submit" value="Save a New delivery" />
        </div>
    </form>
</body>
</html>