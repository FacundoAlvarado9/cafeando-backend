<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variedad;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreUpdateVariedadRequest;

class VariedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variedades = Variedad::filter(request(['search','tipo', 'origen', 'tostaduria']))->paginate(3)->withQueryString();
        return view('variedad.index', [
            'variedades'=>$variedades
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('variedad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateVariedadRequest $request)
    {
      $atributos = $request->safe()->except(['origenes', 'origenes.*']);
      $origenes = $request->safe()->only(['origenes']);

      $nuevaVariedad = Variedad::create($atributos);
      $nuevaVariedad->origenes()->attach($origenes["origenes"]);

      return Redirect::route('variedades.show', $nuevaVariedad->id)->with('status', 'Variedad creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variedad = Variedad::findOrFail($id);
        return view('variedad.show')->with('variedad', $variedad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('variedad.edit', ['variedad' => Variedad::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateVariedadRequest $request, $id)
    {
      $atributos = $request->safe()->except(['origenes', 'origenes.*']);
      $nuevosOrigenes = $request->safe()->only(['origenes']);

      $variedadAEditar = Variedad::findOrFail($id);
      $variedadAEditar->update($atributos);

      $variedadAEditar->origenes()->sync($nuevosOrigenes["origenes"]);

      return Redirect::route('variedades.show', $variedadAEditar->id)->with('status', 'Variedad editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variedadAEliminar = Variedad::findOrFail($id);

        $variedadAEliminar->origenes()->detach();
        $variedadAEliminar->delete();

        return Redirect::route('variedades.index')->with('status', 'Variedad'.$variedadAEliminar->nombre.' eliminada con éxito');
    }
}
