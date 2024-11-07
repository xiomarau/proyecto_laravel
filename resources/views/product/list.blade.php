<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Productos</title>
</head>
<body>

    <table id="idPqrsd" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
              <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>

                  <td><a href="{{route('product.show',$product->id)}}">Mostrar</a></td>

                  <td><a href="{{route('product.edit',$product->id)}}">Editar</a></td>
                  <td>
                  <form action="{{route('product.destroy',$product->id)}}" method="POST">
                      @csrf
                      @method('delete')
                    <button type="submit">Eliminar</button>
                  </form>
                  <br>
                 </td>




              </tr>
          @endforeach
        </tbody>

    </table>


</body>
</html>