<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
        </label>
            <br>
            <input type="text" name="name">

        <br>
        <label>
            descripcion:
        </label>
            <br>
            <input type="text" name="description">

            <br>
            <label>
                price:
            </label>
                <br>
                <input type="text" name="price">


        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>