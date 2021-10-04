<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchResultsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'match_results';

    /**
     * Run the migrations.
     * @table match_results
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('sec')->nullable();
            $table->integer('team_point')->nullable();
            $table->integer('match_id')->unsigned()->nullable();

            $table->index(["match_id"], 'fk_match_results_matches1_idx');


            $table->foreign('match_id', 'fk_match_results_matches1_idx')
                ->references('id')->on('matches')
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
