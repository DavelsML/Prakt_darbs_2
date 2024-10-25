<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse; /* Ensures there are no double borders */
    }
    th, td {
        padding: 10px; /* Adds some space inside table cells */
        text-align: left; /* Aligns text to the left */
    }
    </style>
</head>
<body>
    <h1>Delivery</h1>
    <div>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <a href="{{route('delivery.create')}}">Create a delivery</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($deliveries as $delivery )
                <tr>
                    <td>{{$delivery->id}}</td>
                    <td>{{$delivery->name}}</td>
                    <td>{{$delivery->description}}</td>
                    <td>
                        <a href="{{route('delivery.edit', ['delivery' => $delivery])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('delivery.delete', ['delivery' => $delivery])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <a href="{{route('dashboard')}}" class="text-blue-500 hover:text-blue-950">Back to dashboard</a>
    </div>
</body>
</html>