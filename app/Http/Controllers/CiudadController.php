<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ciudades = Ciudad::filter(request(['search']))->paginate(10)->withQueryString();
      return view('ciudad.index', [
          'ciudades'=>$ciudades
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atributos = request()->validate([
          'nombre' => ['required', Rule::unique('ciudades', 'nombre')],
          'cod_postal' => ['required', 'integer', Rule::unique('ciudades', 'cod_postal')]
        ]);

        $nuevaCiudad = Ciudad::create($atributos);

        return Redirect::route('ciudades.index')->with('status', 'Ciudad creada con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ciudad.edit', ['ciudad' => Ciudad::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $atributos = request()->validate([
        'nombre' => 'required|unique:ciudades,nombre,'.$id.',cod_postal',
        'cod_postal' => 'required|integer|unique:ciudades,cod_postal,'.$id.',cod_postal'
      ]);

      $ciudadAEditar = Ciudad::findOrFail($id);
      $ciudadAEditar->update($atributos);

      return Redirect::route('ciudades.index')->with('status', 'Ciudad editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $ciudadAEliminar = Ciudad::findOrFail($id);

      $ciudadAEliminar->delete();

      return Redirect::route('ciudades.index')->with('status', 'Ciudad '.$ciudadAEliminar->nombre.' eliminada con éxito');
    }
}
