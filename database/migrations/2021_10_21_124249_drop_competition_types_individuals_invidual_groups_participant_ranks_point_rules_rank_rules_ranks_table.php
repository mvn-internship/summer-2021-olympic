<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCompetitionTypesIndividualsInvidualGroupsParticipantRanksPointRulesRankRulesRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('invidual_groups');
        Schema::dropIfExists('individuals');
        Schema::dropIfExists('ranks');
        Schema::dropIfExists('rank_rules');
        Schema::dropIfExists('point_rules');
        Schema::dropIfExists('participant_ranks');
        Schema::dropIfExists('competition_types');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
