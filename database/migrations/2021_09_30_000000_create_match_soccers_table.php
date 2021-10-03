<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchSoccersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'match_soccers';

    /**
     * Run the migrations.
     * @table matchs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->integer('rank_id')->nullable();
            $table->integer('match_code')->nullable();
            $table->integer('tournament_id')->nullable();
            $table->integer('group_id')->nullable();
        });
        Schema::table('penatly_cards', function (Blueprint $table) {
            $table->foreign('match_id', 'fk_penatly_card_match_soccers1_idx')
                ->references('id')->on('match_soccers')
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
