<?php

namespace App\Http\Controllers;

use App\Models\Tostaduria;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tostaduria  $tostaduria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
