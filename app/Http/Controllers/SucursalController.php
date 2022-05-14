<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

use App\Models\Sucursal;
use App\Models\Tostaduria;

class SucursalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tostaduria_id)
    {
        return view('sucursal.create', ['tostaduria_id' => $tostaduria_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $tostaduria_id)
    {
        $atributos = $request->validate([
          'ciudad_cp' => ['required', 'integer', Rule::exists('ciudades', 'cod_postal')],

          //dirección debe ser única entre todas las sucursales que tengan por ciudad_cp a $request->ciudad_cp
          'direccion' => 'required|unique:sucursales,direccion,NULL,id,ciudad_cp,'.$request->ciudad_cp //No permite combinar misma direccion y misma ciudad
        ]);

        $tostaduria = Tostaduria::findOrFail($tostaduria_id);

        $sucursal = $tostaduria->sucursales()->create($atributos);

        return Redirect::route('tostadurias.show', $tostaduria_id)->with('status', 'Sucursal en '.$sucursal->direccion.', '.$sucursal->ciudad->nombre.' creada con éxito. ');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sucursal.edit', [
          'sucursal' => Sucursal::findOrFail($id),
        ]);
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
      $atributos = $request->validate([
        'ciudad_cp' => ['required', 'integer', Rule::exists('ciudades', 'cod_postal')],

        //dirección debe ser única entre todas las sucursales que tengan por ciudad_cp a $request->ciudad_cp
        //Exceptuando a aquella de id $id (exceptuandola a sí misma)
        'direccion' => 'required|unique:sucursales,direccion,'.$id.',id,ciudad_cp,'.$request->ciudad_cp //No permite combinar misma direccion y misma ciudad
      ]);

      $sucursal = Sucursal::findOrFail($id);

      $sucursal->update($atributos);

      return Redirect::route('tostadurias.show', $sucursal->tostaduria)->with('status', 'Sucursal en '.$sucursal->direccion.', '.$sucursal->ciudad->nombre.' editada con éxito. ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);

        $sucursal->delete();

        return Redirect::route('tostadurias.show', $sucursal->tostaduria)->with('status', 'Sucursal en '.$sucursal->direccion.', '.$sucursal->ciudad->nombre.' eliminada con éxito. ');
    }
}
