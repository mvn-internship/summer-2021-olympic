<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'name' => 'Admin 1',
                'email' => 'admin1@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin123'), // password
                'remember_token' => Str::random(10),
                'address' => 'asdfuiwe',
                'phone' => '123456789',
                'status' => 1,
            ]
        );
        \App\Models\User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'), // password
            'remember_token' => Str::random(10),
            'address' => 'apwfihwepfoiwejf',
            'phone' => '123789456',
            'status' => 2,
        ]);
        \App\Models\User::create([
            'name' => 'User 1',
            'email' => 'user1@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user123'), // password
            'remember_token' => Str::random(10),
            'address' => 'apwfihwepfoiwejf',
            'phone' => '123789456',
            'status' => 1,
        ]);
        \App\Models\User::create([
            'name' => 'User 2',
            'email' => 'user2@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user123'), // password
            'remember_token' => Str::random(10),
            'address' => 'apwfihwepfoiwejf',
            'phone' => '123789456',
            'status' => 2,
        ]);

        \App\Models\Participant::factory(10)->create();
        \App\Models\Permisson::factory(10)->create();
        \App\Models\Role::factory(1)->create();

        DB::table('role_users')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('role_users')->insert([
            'role_id' => 1,
            'user_id' => 2,
        ]);
        DB::table('role_users')->insert([
            'role_id' => 2,
            'user_id' => 3,
        ]);
        DB::table('role_users')->insert([
            'role_id' => 3,
            'user_id' => 4,
        ]);

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
