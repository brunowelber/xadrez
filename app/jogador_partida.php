<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\jogador_partida
 *
 * @property int $id
 * @property int $jogador_id
 * @property int $partida_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida whereJogadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida wherePartidaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\jogador_partida whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class jogador_partida extends Pivot
{
    //
}
