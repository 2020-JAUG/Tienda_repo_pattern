<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Producto: {{ $product->name }}</title>
</head>

<body>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        {{ method_field('delete') }}
        <h3>¿Estás seguro que deseas eliminar el Producto: {{ $product->name }}?</h3>
        <button class="btn btn-default" type="submit">Yes, deleted product</button>
    </form>

</body>

</html>
