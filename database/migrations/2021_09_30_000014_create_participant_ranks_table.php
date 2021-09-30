<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantRanksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'participant_ranks';

    /**
     * Run the migrations.
     * @table participant_ranks
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id', 11);
            $table->integer('participant_id')->unsigned()->nullable();
            $table->integer('rank_id')->unsigned()->nullable();

            $table->index(["participant_id"], 'fk_participant_ranks_participants1_idx');


            $table->foreign('participant_id', 'fk_participant_ranks_participants1_idx')
                ->references('id')->on('participants')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
