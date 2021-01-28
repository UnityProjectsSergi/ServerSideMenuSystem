<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("namePrefab");
            $table->string("pathPrefab");
            $table->json("positionJson");
            $table->json("rotationJson");
            $table->json("scaleJson");
            $table->boolean('isActive');
            $table->json("layerMask");
            $table->string("tag");
            $table->boolean('isStatic');
            $table->timestamps();
            $table->integer('staticFlag')->default(0);
            $table->softDeletes('deleted_at', 0);
            $table->integer('slot_id')->unsigned();
            $table->foreign("slot_id")->references('id')->on('slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_objects');
    }
}
