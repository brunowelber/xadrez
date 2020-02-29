<?php
namespace App\Http\Controllers;

use App\Comentario;
use App\Jogador;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jogador $jogador)
    {
        $comentario = new Comentario();
        $comentario->jogador_id = $jogador->id;
        $comentario->comentario = $request->comentario;
        $comentario->save();
        return redirect()->action("JogadorController@show", [
            $jogador->id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Comentario $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view("comentario.editar", [
            "comentario" => $comentario
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Comentario $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        $comentario->comentario = $request->comentario;
        $comentario->save();
        return redirect()->action("JogadorController@show", [
            $comentario->jogador->id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Comentario $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $jogador_id = $comentario->jogador->id;
        $comentario->delete();
        return redirect()->action("JogadorController@show", [
            $jogador_id
        ]);
    }
}
