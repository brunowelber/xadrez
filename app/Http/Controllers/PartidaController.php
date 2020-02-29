<?php
namespace App\Http\Controllers;

use App\Jogador;
use App\Partida;
use Illuminate\Http\Request;

class PartidaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidas = Partida::all();
        return view("partida.listar", [
            "partidas" => $partidas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jogadores = Jogador::all();
        return view("partida.criar", [
            "jogadores" => $jogadores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partida = new Partida();
        $partida->data = $request->data;
        $partida->duracao = $request->duracao;
        $partida->local = $request->local;
        $partida->save();
        $partida->jogadores()->sync([
            $request->jogador1,
            $request->jogador2
        ]);
        return redirect()->action("PartidaController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Partida $partida
     * @return \Illuminate\Http\Response
     */
    public function show(Partida $partida)
    {
        return view("partida.exibir", [
            "partida" => $partida
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Partida $partida
     * @return \Illuminate\Http\Response
     */
    public function edit(Partida $partida)
    {
        $jogadores = Jogador::all();
        return view("partida.editar", [
            "partida" => $partida,
            "jogadores" => $jogadores,
                    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Partida $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partida $partida)
    {
        $partida->data = $request->data;
        $partida->duracao = $request->duracao;
        $partida->local = $request->local;
        $partida->save();
        $partida->jogadores()->sync([
            $request->jogador1,
            $request->jogador2
        ]);
        return redirect()->action("PartidaController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Partida $partida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partida $partida)
    {
        $partida->delete();
        return redirect()->action("PartidaController@index");
    }
}
