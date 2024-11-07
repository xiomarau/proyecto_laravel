<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <form action="{{route('product.update', $product)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$product->name) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="description" type="text" value="{{old('description',$product->description)}}">
        <br>
        </label>
        <br>

        <input name="price" type="text" value="{{old('price',$product->price)}}">
        <br>
        </label>
        <br>

        <button  type="submit">Actualizar Producto</button>

    </form>

</body>
</html>