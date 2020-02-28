<?php
namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogadores = Jogador::all();
        return view("jogador.listar", [
            "jogadores" => $jogadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("jogador.criar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jogador = new Jogador();
        $jogador->nome = $request->nome;
        $jogador->score = $request->score;
        $jogador->save();
        return redirect()->action("JogadorController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Jogador $jogador
     * @return \Illuminate\Http\Response
     */
    public function show(Jogador $jogador)
    {
        return view("jogador.exibir", [
            "jogador" => $jogador
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Jogador $jogador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jogador $jogador)
    {
        return view("jogador.editar", [
            "jogador" => $jogador
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Jogador $jogador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jogador $jogador)
    {
        $jogador->nome = $request->nome;
        $jogador->score = $request->score;
        $jogador->save();
        return redirect()->action("JogadorController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Jogador $jogador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogador $jogador)
    {
        $jogador->delete();
        return redirect()->action("JogadorController@index");
    }
}
