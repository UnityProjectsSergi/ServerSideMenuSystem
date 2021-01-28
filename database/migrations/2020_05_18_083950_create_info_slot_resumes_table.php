<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoSlotResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_slot_resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("currentLevelPlay");
            $table->string("screenShootPath");
            $table->integer("gameDifficulty")->unsigned();
            $table->integer("typeSaveSlot")->unsigned();
            $table->datetime("dateTimeCreation");
            $table->datetime("datetimeSaved");
            $table->softDeletes('deleted_at', 0);
            $table->unsignedBigInteger('game_slot_id');
            $table->foreign("game_slot_id")->references('id')->on('game_slot_resumes');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_slot_resumes');
    }
}
