<?php

namespace App\Http\Controllers;

use App\Models\Tostaduria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class TostaduriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tostadurias = Tostaduria::filter(request(['search', 'presente-en']))->paginate(3)->withQueryString();
        return view('tostaduria.index', [
            'tostadurias'=>$tostadurias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tostaduria.create');
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
          'nombre' => ['required', Rule::unique('tostadurias', 'nombre')]
        ]);

        $nuevaTostaduria = Tostaduria::create($atributos);

        return Redirect::route('tostadurias.show', $nuevaTostaduria->id)->with('status', 'Tostaduria creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tostaduria  $tostaduria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tostaduria = Tostaduria::findOrFail($id);
        return view('tostaduria.show')->with('tostaduria', $tostaduria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tostaduria  $tostaduria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tostaduria.edit', ['tostaduria' => Tostaduria::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tostaduria  $tostaduria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $atributos = request()->validate([
          'nombre' => ['required', Rule::unique('tostadurias', 'nombre')->ignore($id)]
        ]);

        $tostaduriaAEditar = Tostaduria::findOrFail($id);

        $tostaduriaAEditar->update($atributos);

        return Redirect::route('tostadurias.show', $tostaduriaAEditar->id)->with('status', 'Tostaduria editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tostaduria  $tostaduria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tostaduriaAEliminar = Tostaduria::findOrFail($id);

        $tostaduriaAEliminar->delete();

        return Redirect::route('tostadurias.index')->with('status', 'Tostaduria '.$tostaduriaAEliminar->nombre.' eliminada con éxito');
    }
}
