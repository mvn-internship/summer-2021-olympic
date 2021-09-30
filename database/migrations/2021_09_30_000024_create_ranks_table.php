<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ranks';

    /**
     * Run the migrations.
     * @table ranks
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->integer('gender')->nullable();
            $table->integer('rank_rules_id')->unsigned();
            $table->integer('point_rules_id')->unsigned();

            $table->index(["rank_rules_id"], 'fk_ranks_rank_rules1_idx');

            $table->index(["point_rules_id"], 'fk_ranks_point_rules1_idx');


            $table->foreign('rank_rules_id', 'fk_ranks_rank_rules1_idx')
                ->references('id')->on('rank_rules')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('point_rules_id', 'fk_ranks_point_rules1_idx')
                ->references('id')->on('point_rules')
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
