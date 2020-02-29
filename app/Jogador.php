<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Jogador
 *
 * @property int $id
 * @property string $nome
 * @property int $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Jogador whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Partida[] $partidas
 * @property-read int|null $partidas_count
 */
class Jogador extends Model
{

    protected $table = "jogadores";

    public function partidas()
    {
        return $this->belongsToMany('App\Partida');
    }

    public function comentarios()
    {
        return $this->hasMany("App\Comentario");
    }
}
