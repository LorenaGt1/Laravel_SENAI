<?php

namespace App\Http\Controllers;
use App\Models\Editora;

use Illuminate\Http\Request;

class EditoraController extends Controller{
    $query = Editora::query();
    $editora = $query->get();
    return view ('listar' compact('editora'));
}