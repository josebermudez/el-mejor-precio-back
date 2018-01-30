<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductoController extends Controller
{
    public function show()
    {
        return Productos::all();
    }
}
