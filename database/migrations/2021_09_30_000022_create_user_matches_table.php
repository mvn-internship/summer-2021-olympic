<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMatchesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_matches';

    /**
     * Run the migrations.
     * @table user_match
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('match_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();

            $table->index(["match_id"], 'fk_user_match_matches1_idx');

            $table->index(["user_id"], 'fk_user_match_users1_idx');


            $table->foreign('match_id', 'fk_user_match_matches1_idx')
                ->references('id')->on('matches')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_user_match_users1_idx')
                ->references('id')->on('users')
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
