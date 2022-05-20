<?php

namespace App\Http\Controllers;

use App\Models\Sapato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SapatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        sapato::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tamanho' => $request->tamanho,
            'cor' => $request->cor,
            'user_id' => Auth::user()->id
        ]);
        return redirect ('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sapato  $sapato
     * @return \Illuminate\Http\Response
     */
    public function show(Sapato $sapato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sapato  $sapato
     * @return \Illuminate\Http\Response
     */
    public function edit(Sapato $sapato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sapato  $sapato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sapato $sapato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sapato  $sapato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sapato $sapato)
    {
        //
    }
}
