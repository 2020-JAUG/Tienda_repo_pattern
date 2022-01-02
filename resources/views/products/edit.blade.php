<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product: {{ $product->name }}</title>
</head>

<body>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <input value="{{ $product->name }}" type="text" name="name" placeholder="Name"><br><br>
        <input value="{{ $product->price }}" type="text" name="price" placeholder="Price -> format 23.5"><br><br>
        <textarea name="description" placeholder="Description"
            rows="10">{{ $product->description }}</textarea><br><br>
        <input value="{{ $product->stock }}" type="number" name="stock" placeholder="Stock"><br><br>
        <button type="submit">Edit product</button>
    </form>
</body>

</html>
