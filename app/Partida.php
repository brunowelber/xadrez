<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Partida
 *
 * @property int $id
 * @property string $data
 * @property string $duracao
 * @property string $local
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Jogador[] $jogadores
 * @property-read int|null $jogadores_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereDuracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partida whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Partida extends Model
{
    
    public function jogadores(){
        return $this->belongsToMany("App\Jogador");
    }
}
