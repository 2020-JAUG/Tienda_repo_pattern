<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($myProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="/products/{{ $product->id }}">Show</a>
                        <a href="/products/{{ $product->id }}/edit">Edit</a>

                        <a href="/products/delete/{{ $product->id }}">Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="/products/create">Create products</a>
</body>

</html>
