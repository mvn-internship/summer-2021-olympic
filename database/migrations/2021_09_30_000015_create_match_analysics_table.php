<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchAnalysicsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'match_analysics';

    /**
     * Run the migrations.
     * @table match_analysics
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('participant_id')->unsigned()->nullable();
            $table->integer('rank_id')->unsigned()->nullable();
            $table->integer('match_id')->unsigned()->nullable();
            $table->integer('score_time')->nullable();
            $table->integer('tournament_id')->unsigned()->nullable();

            $table->index(["participant_id"], 'fk_participant_result_analysics_participants1_idx');


            $table->foreign('participant_id', 'fk_participant_result_analysics_participants1_idx')
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
