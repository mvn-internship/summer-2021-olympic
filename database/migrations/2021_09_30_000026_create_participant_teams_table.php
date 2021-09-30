<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTeamsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'participant_teams';

    /**
     * Run the migrations.
     * @table participant_team
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('participant_id')->unsigned();
            $table->integer('team_id')->unsigned();

            $table->index(["participant_id"], 'fk_team_participant_participants1_idx');

            $table->index(["team_id"], 'fk_team_participant_teams1_idx');


            $table->foreign('participant_id', 'fk_team_participant_participants1_idx')
                ->references('id')->on('participants')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('team_id', 'fk_team_participant_teams1_idx')
                ->references('id')->on('teams')
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
