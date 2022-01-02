<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product: {{ $product->name }}</title>
</head>

<body>

    <input disabled value="{{ $product->name }}" type="text" name="name" placeholder="Name"><br><br>
    <input disabled value="{{ $product->price }}" type="text" name="price" placeholder="Price -> format 23.5"><br><br>
    <textarea disabled name="description" placeholder="Description"
        rows="10">{{ $product->description }}</textarea><br><br>
    <input disabled value="{{ $product->stock }}" type="number" name="stock" placeholder="Stock"><br><br>

    <a href="/products">List products</a>
</body>

</html>
