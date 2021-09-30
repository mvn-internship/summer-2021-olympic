<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedalsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'medals';

    /**
     * Run the migrations.
     * @table medals
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->integer('rank_id')->unsigned()->nullable();
            $table->integer('tournament_id')->unsigned()->nullable();
            $table->integer('team_id')->unsigned();

            $table->index(["team_id"], 'fk_medals_teams1_idx');


            $table->foreign('team_id', 'fk_medals_teams1_idx')
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
