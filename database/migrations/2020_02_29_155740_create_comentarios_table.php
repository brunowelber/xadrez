<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("jogador_id")
                ->index()
                ->unsigned()
                ->nullable();
            $table->text("comentario");
            $table->timestamps();
            $table->foreign('jogador_id')
                ->references('id')
                ->on('jogadores')
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->engine = "innodb";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
