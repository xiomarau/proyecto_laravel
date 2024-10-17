<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadraticController extends Controller
{
    // Mostrar el formulario
    public function showForm()
    {
        return view('quadratic');
    }

    // Resolver la ecuación cuadrática
    public function solveQuadratic(Request $request)
    {
        // Validar los valores de entrada
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        // Obtener los valores de a, b y c
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        // Calcular el discriminante (b^2 - 4ac)
        $discriminant = ($b * $b) - (4 * $a * $c);

        // Verificar si hay soluciones reales
        if ($discriminant < 0) {
            $message = "No hay soluciones reales.";
            return view('quadratic', compact('message'));
        }

        // Calcular las soluciones usando la fórmula cuadrática
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);

        return view('quadratic', compact('root1', 'root2'));
    }
}
