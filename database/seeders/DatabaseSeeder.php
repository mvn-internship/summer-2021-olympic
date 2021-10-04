<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    
        \App\Models\Participant::factory(10)->create();
        \App\Models\Permisson::factory(10)->create();
        \App\Models\Role::factory(1)->create();
        \App\Models\RolePermisson::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\RoleUser::factory(10)->create();
        \App\Models\Place::factory(10)->create();
        \App\Models\PlaceSlot::factory(10)->create();
        \App\Models\Country::factory(10)->create();
        \App\Models\Province::factory(10)->create();
        \App\Models\District::factory(10)->create();
        \App\Models\Club::factory(10)->create();
        \App\Models\Group::factory(10)->create();
        \App\Models\RankRule::factory(10)->create();
        \App\Models\PointRule::factory(10)->create();
        \App\Models\Rank::factory(10)->create();
        \App\Models\CompetitionType::factory(10)->create();
        \App\Models\Tournament::factory(10)->create();
        \App\Models\Individual::factory(10)->create();
        \App\Models\InvidualGroup::factory(10)->create();
        \App\Models\Team::factory(10)->create();
        \App\Models\OrganizationTournament::factory(10)->create();
        \App\Models\MatchSoccer::factory(10)->create();
        \App\Models\MatchResult::factory(10)->create();
        \App\Models\Schedule::factory(10)->create();
        \App\Models\Medal::factory(10)->create();
        \App\Models\MatchAnalysic::factory(10)->create();
        \App\Models\ParticipantRank::factory(10)->create();
        \App\Models\ParticipantRank::factory(10)->create();
        \App\Models\PenatlyCard::factory(10)->create();
        \App\Models\UserMatch::factory(10)->create();
        \App\Models\ParticipantTeam::factory(10)->create();
    }
}
