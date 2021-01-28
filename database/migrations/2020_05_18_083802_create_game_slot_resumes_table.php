<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameSlotResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_slot_resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean("folderDone");
            $table->string("FolderOfSlot");
            $table->string("FileSlot");
            $table->softDeletes('deleted_at', 0);
           
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_slot_resumes');
    }
}
