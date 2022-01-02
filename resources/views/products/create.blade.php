<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Products</title>
</head>
<body>
    <h1>Create products</h1>

    <form action="/products" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="price" placeholder="Price -> format 23.5"><br><br>
        <textarea name="description" placeholder="Description" rows="10"></textarea><br><br>
        <input type="number" name="stock" placeholder="Stock"><br><br>
        <button type="submit">Insert product</button>

    </form>
</body>
</html>