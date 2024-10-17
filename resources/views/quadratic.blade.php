<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución de Ecuación Cuadrática</title>
</head>
<body>
    <h1>Calculadora de Ecuación Cuadrática</h1>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Mostrar formulario -->
    <form action="/quadratic" method="POST">
        @csrf
        <label for="a">Valor de a:</label>
        <input type="text" id="a" name="a" value="{{ old('a') }}"><br><br>

        <label for="b">Valor de b:</label>
        <input type="text" id="b" name="b" value="{{ old('b') }}"><br><br>

        <label for="c">Valor de c:</label>
        <input type="text" id="c" name="c" value="{{ old('c') }}"><br><br>

        <button type="submit">Calcular</button>
    </form>

    <!-- Mostrar resultados si los hay -->
    @isset($root1, $root2)
        <h2>Soluciones:</h2>
        <p>Raíz 1: {{ $root1 }}</p>
        <p>Raíz 2: {{ $root2 }}</p>
    @endisset

   
    @isset($message)
        <p>{{ $message }}</p>
    @endisset
</body>
</html>
