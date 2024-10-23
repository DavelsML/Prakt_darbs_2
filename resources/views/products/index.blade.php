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
    <h1>Product</h1>
    <div>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <a href="{{route('product.create')}}">Create a product</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Delivery company</th> <!-- New Column -->
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->delivery->name ?? 'N/A' }}</td> <!-- Display Delivery Name -->
                        <td><a href="{{ route('product.edit', $product->id) }}">Edit</a></td>
                        <td><form method="POST" action="{{ route('product.delete', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{route('dashboard')}}" class="text-blue-500 hover:text-blue-950">Back to dashboard</a>
    </div>
</body>
</html>