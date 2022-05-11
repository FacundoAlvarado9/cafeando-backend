<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variedad;
use App\Rules\ArrayAtLeastOneRequired;
use Illuminate\Validation\Rule;

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
    public function store(Request $request)
    {

      $atributos = $request->validate([
        'nombre' => ['required', Rule::unique('variedades', 'nombre')],
        'descripcion' => 'required',
        'tipo_id' => ['required', Rule::exists('tipos', 'id')],
        'tostaduria_id' => ['required', Rule::exists('tostadurias', 'id')],
        'url' => 'required'
      ]);

      $origenes = $request->validate(['origenes'=>'array|required|min:1']);

      $nuevaVariedad = Variedad::create($atributos);
      $nuevaVariedad->origenes()->attach($origenes["origenes"]);

      return redirect(route('variedades.show', $nuevaVariedad->id))->with('status', 'Variedad creada con éxito');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
