<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    //

public function vistaIndex(Request $request)
{
    return view('principal/index');
}

public function vistaNosotros(Request $request)
{
    return view('principal/nosotros');
}

public function vistaServicios(Request $request)
{
    return view('principal/servicios');
}

public function vistaBlog(Request $request)
{
    return view('principal/blog');
}

}
