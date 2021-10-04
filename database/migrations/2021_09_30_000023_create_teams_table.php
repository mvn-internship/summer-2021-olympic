<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'teams';

    /**
     * Run the migrations.
     * @table teams
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->integer('tournament_id')->unsigned()->nullable();
            $table->string('coach_name', 45)->nullable();
            $table->integer('group_id')->unsigned();
            $table->integer('club_id')->unsigned()->nullable();

            $table->index(["group_id"], 'fk_teams_groups1_idx');


            $table->foreign('group_id', 'fk_teams_groups1_idx')
                ->references('id')->on('groups')
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
