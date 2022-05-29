<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origen;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class OrigenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $origenes = Origen::filter(request(['search']))->paginate(3)->withQueryString();
      return view('origen.index', [
          'origenes'=>$origenes
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('origen.create');
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
          'nombre' => ['required', Rule::unique('origenes', 'nombre')],
          'descripcion' => 'required'
        ]);

        $nuevoOrigen = Origen::create($atributos);

        return Redirect::route('origenes.index')->with('status', 'Origen '.$nuevoOrigen->nombre.' creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $origen = Origen::findOrFail($id);
      return view('origen.show')->with('origen', $origen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('origen.edit', ['origen' => Origen::findOrFail($id)]);
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
        'nombre' => ['required', Rule::unique('origenes', 'nombre')->ignore($id)],
        'descripcion' => 'required'
      ]);

      $origenAEditar = Origen::findOrFail($id);

      $origenAEditar->update($atributos);

      return Redirect::route('origenes.index')->with('status', 'Origen '.$origenAEditar->nombre.' editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $origenAEliminar = Origen::findOrFail($id);

        $origenAEliminar->variedades()->delete(); //Elimina las variedades asociadas también
        $origenAEliminar->delete();

        return Redirect::route('origenes.index')->with('status', 'Origen '.$origenAEliminar->nombre.' eliminado con éxito');
    }
}
