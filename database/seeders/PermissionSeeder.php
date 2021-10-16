<?php

namespace Database\Seeders;

use App\Models\Permisson;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permisson::insert([
            ['name' => 'viewAny-club', 'display_name' => 'View All Club'],
            ['name' => 'view-club', 'display_name' => 'View Specific Club'],
            ['name' => 'create-club', 'display_name' => 'Create Club'],
            ['name' => 'update-club', 'display_name' => 'Update Specific Club'],
            ['name' => 'delete-club', 'display_name' => 'Delete Specific Club'],

            ['name' => 'viewAny-competitionType', 'display_name' => 'View All Competition Type'],
            ['name' => 'view-competitionType', 'display_name' => 'View Specific Competition Type'],
            ['name' => 'create-competitionType', 'display_name' => 'Create Competition Type'],
            ['name' => 'update-competitionType', 'display_name' => 'Update Specific Competition Type'],
            ['name' => 'delete-competitionType', 'display_name' => 'Delete Specific Competition Type'],

            ['name' => 'viewAny-country', 'display_name' => 'View All Country'],
            ['name' => 'view-country', 'display_name' => 'View Specific Country'],
            ['name' => 'create-country', 'display_name' => 'Create Country'],
            ['name' => 'update-country', 'display_name' => 'Update Specific Country'],
            ['name' => 'delete-country', 'display_name' => 'Delete Specific Country'],

            ['name' => 'viewAny-district', 'display_name' => 'View All District'],
            ['name' => 'view-district', 'display_name' => 'View Specific District'],
            ['name' => 'create-district', 'display_name' => 'Create District'],
            ['name' => 'update-district', 'display_name' => 'Update Specific District'],
            ['name' => 'delete-district', 'display_name' => 'Delete Specific District'],

            ['name' => 'viewAny-group', 'display_name' => 'View All Group'],
            ['name' => 'view-group', 'display_name' => 'View Specific Group'],
            ['name' => 'create-group', 'display_name' => 'Create Group'],
            ['name' => 'update-group', 'display_name' => 'Update Specific Group'],
            ['name' => 'delete-group', 'display_name' => 'Delete Specific Group'],

            ['name' => 'viewAny-individual', 'display_name' => 'View All Individual'],
            ['name' => 'view-individual', 'display_name' => 'View Specific Individual'],
            ['name' => 'create-individual', 'display_name' => 'Create Individual'],
            ['name' => 'update-individual', 'display_name' => 'Update Specific Individual'],
            ['name' => 'delete-individual', 'display_name' => 'Delete Specific Individual'],

            ['name' => 'viewAny-individualGroup', 'display_name' => 'View All Individual Group'],
            ['name' => 'view-individualGroup', 'display_name' => 'View Specific Individual Group'],
            ['name' => 'create-individualGroup', 'display_name' => 'Create Individual Group'],
            ['name' => 'update-individualGroup', 'display_name' => 'Update Specific Individual Group'],
            ['name' => 'delete-individualGroup', 'display_name' => 'Delete Specific Individual Group'],

            ['name' => 'viewAny-matchAnalysis', 'display_name' => 'View All Match Analysis'],
            ['name' => 'view-matchAnalysis', 'display_name' => 'View Specific Match Analysis'],
            ['name' => 'create-matchAnalysis', 'display_name' => 'Create Match Analysis'],
            ['name' => 'update-matchAnalysis', 'display_name' => 'Update Specific Match Analysis'],
            ['name' => 'delete-matchAnalysis', 'display_name' => 'Delete Specific Match Analysis'],

            ['name' => 'viewAny-matchResult', 'display_name' => 'View All Match Result'],
            ['name' => 'view-matchResult', 'display_name' => 'View Specific Match Result'],
            ['name' => 'create-matchResult', 'display_name' => 'Create Match Result'],
            ['name' => 'update-matchResult', 'display_name' => 'Update Specific Match Result'],
            ['name' => 'delete-matchResult', 'display_name' => 'Delete Specific Match Result'],

            ['name' => 'viewAny-matchSoccer', 'display_name' => 'View All Match'],
            ['name' => 'view-matchSoccer', 'display_name' => 'View Specific Match'],
            ['name' => 'create-matchSoccer', 'display_name' => 'Create Match'],
            ['name' => 'update-matchSoccer', 'display_name' => 'Update Specific Match'],
            ['name' => 'delete-matchSoccer', 'display_name' => 'Delete Specific Match'],

            ['name' => 'viewAny-medal', 'display_name' => 'View All Medal'],
            ['name' => 'view-medal', 'display_name' => 'View Specific Medal'],
            ['name' => 'create-medal', 'display_name' => 'Create Medal'],
            ['name' => 'update-medal', 'display_name' => 'Update Specific Medal'],
            ['name' => 'delete-medal', 'display_name' => 'Delete Specific Medal'],

            ['name' => 'viewAny-organizationTournament', 'display_name' => 'View All Team Tournament'],
            ['name' => 'view-organizationTournament', 'display_name' => 'View Specific Team Tournament'],
            ['name' => 'create-organizationTournament', 'display_name' => 'Create Team Tournament'],
            ['name' => 'update-organizationTournament', 'display_name' => 'Update Specific Team Tournament'],
            ['name' => 'delete-organizationTournament', 'display_name' => 'Delete Specific Team Tournament'],

            ['name' => 'viewAny-participant', 'display_name' => 'View All Participant'],
            ['name' => 'view-participant', 'display_name' => 'View Specific Participant'],
            ['name' => 'create-participant', 'display_name' => 'Create Participant'],
            ['name' => 'update-participant', 'display_name' => 'Update Specific Participant'],
            ['name' => 'delete-participant', 'display_name' => 'Delete Specific Participant'],

            ['name' => 'viewAny-participantRank', 'display_name' => 'View All Participant Rank'],
            ['name' => 'view-participantRank', 'display_name' => 'View Specific Participant Rank'],
            ['name' => 'create-participantRank', 'display_name' => 'Create Participant Rank'],
            ['name' => 'update-participantRank', 'display_name' => 'Update Specific Participant Rank'],
            ['name' => 'delete-participantRank', 'display_name' => 'Delete Specific Participant Rank'],

            ['name' => 'viewAny-participantTeam', 'display_name' => 'View All Participant Team'],
            ['name' => 'view-participantTeam', 'display_name' => 'View Specific Participant Team'],
            ['name' => 'create-participantTeam', 'display_name' => 'Create Participant Team'],
            ['name' => 'update-participantTeam', 'display_name' => 'Update Specific Participant Team'],
            ['name' => 'delete-participantTeam', 'display_name' => 'Delete Specific Participant Team'],

            ['name' => 'viewAny-penaltyCard', 'display_name' => 'View All Penalty Card'],
            ['name' => 'view-penaltyCard', 'display_name' => 'View Specific Penalty Card'],
            ['name' => 'create-penaltyCard', 'display_name' => 'Create Penalty Card'],
            ['name' => 'update-penaltyCard', 'display_name' => 'Update Specific Penalty Card'],
            ['name' => 'delete-penaltyCard', 'display_name' => 'Delete Specific Penalty Card'],

            ['name' => 'viewAny-permission', 'display_name' => 'View All Permission'],
            ['name' => 'view-permission', 'display_name' => 'View Specific Permission'],
            ['name' => 'create-permission', 'display_name' => 'Create Permission'],
            ['name' => 'update-permission', 'display_name' => 'Update Specific Permission'],
            ['name' => 'delete-permission', 'display_name' => 'Delete Specific Permission'],

            ['name' => 'viewAny-place', 'display_name' => 'View All Place'],
            ['name' => 'view-place', 'display_name' => 'View Specific Place'],
            ['name' => 'create-place', 'display_name' => 'Create Place'],
            ['name' => 'update-place', 'display_name' => 'Update Specific Place'],
            ['name' => 'delete-place', 'display_name' => 'Delete Specific Place'],

            ['name' => 'viewAny-placeSlot', 'display_name' => 'View All Place Slot'],
            ['name' => 'view-placeSlot', 'display_name' => 'View Specific Place Slot'],
            ['name' => 'create-placeSlot', 'display_name' => 'Create Place Slot'],
            ['name' => 'update-placeSlot', 'display_name' => 'Update Specific Place Slot'],
            ['name' => 'delete-placeSlot', 'display_name' => 'Delete Specific Place Slot'],

            ['name' => 'viewAny-pointRule', 'display_name' => 'View All Point Rule'],
            ['name' => 'view-pointRule', 'display_name' => 'View Specific Point Rule'],
            ['name' => 'create-pointRule', 'display_name' => 'Create Point Rule'],
            ['name' => 'update-pointRule', 'display_name' => 'Update Specific Point Rule'],
            ['name' => 'delete-pointRule', 'display_name' => 'Delete Specific Point Rule'],

            ['name' => 'viewAny-province', 'display_name' => 'View All Province'],
            ['name' => 'view-province', 'display_name' => 'View Specific Province'],
            ['name' => 'create-province', 'display_name' => 'Create Province'],
            ['name' => 'update-province', 'display_name' => 'Update Specific Province'],
            ['name' => 'delete-province', 'display_name' => 'Delete Specific Province'],

            ['name' => 'viewAny-rank', 'display_name' => 'View All Rank'],
            ['name' => 'view-rank', 'display_name' => 'View Specific Rank'],
            ['name' => 'create-rank', 'display_name' => 'Create Rank'],
            ['name' => 'update-rank', 'display_name' => 'Update Specific Rank'],
            ['name' => 'delete-rank', 'display_name' => 'Delete Specific Rank'],

            ['name' => 'viewAny-rankRule', 'display_name' => 'View All Rank Rule'],
            ['name' => 'view-rankRule', 'display_name' => 'View Specific Rank Rule'],
            ['name' => 'create-rankRule', 'display_name' => 'Create Rank Rule'],
            ['name' => 'update-rankRule', 'display_name' => 'Update Specific Rank Rule'],
            ['name' => 'delete-rankRule', 'display_name' => 'Delete Specific Rank Rule'],

            ['name' => 'viewAny-rolePermission', 'display_name' => 'View All Role Permission'],
            ['name' => 'view-rolePermission', 'display_name' => 'View Specific Role Permission'],
            ['name' => 'create-rolePermission', 'display_name' => 'Create Role Permission'],
            ['name' => 'update-rolePermission', 'display_name' => 'Update Specific Role Permission'],
            ['name' => 'delete-rolePermission', 'display_name' => 'Delete Specific Role Permission'],

            ['name' => 'viewAny-role', 'display_name' => 'View All Role'],
            ['name' => 'view-role', 'display_name' => 'View Specific Role'],
            ['name' => 'create-role', 'display_name' => 'Create Role'],
            ['name' => 'update-role', 'display_name' => 'Update Specific Role'],
            ['name' => 'delete-role', 'display_name' => 'Delete Specific Role'],

            ['name' => 'viewAny-roleUser', 'display_name' => 'View All Role User'],
            ['name' => 'view-roleUser', 'display_name' => 'View Specific Role User'],
            ['name' => 'create-roleUser', 'display_name' => 'Create Role User'],
            ['name' => 'update-roleUser', 'display_name' => 'Update Specific Role User'],
            ['name' => 'delete-roleUser', 'display_name' => 'Delete Specific Role User'],

            ['name' => 'viewAny-schedule', 'display_name' => 'View All Schedule'],
            ['name' => 'view-schedule', 'display_name' => 'View Specific Schedule'],
            ['name' => 'create-schedule', 'display_name' => 'Create Schedule'],
            ['name' => 'update-schedule', 'display_name' => 'Update Specific Schedule'],
            ['name' => 'delete-schedule', 'display_name' => 'Delete Specific Schedule'],

            ['name' => 'viewAny-team', 'display_name' => 'View All Team'],
            ['name' => 'view-team', 'display_name' => 'View Specific Team'],
            ['name' => 'create-team', 'display_name' => 'Create Team'],
            ['name' => 'update-team', 'display_name' => 'Update Specific Team'],
            ['name' => 'delete-team', 'display_name' => 'Delete Specific Team'],

            ['name' => 'viewAny-tournament', 'display_name' => 'View All Tournament'],
            ['name' => 'view-tournament', 'display_name' => 'View Specific Tournament'],
            ['name' => 'create-tournament', 'display_name' => 'Create Tournament'],
            ['name' => 'update-tournament', 'display_name' => 'Update Specific Tournament'],
            ['name' => 'delete-tournament', 'display_name' => 'Delete Specific Tournament'],

            ['name' => 'viewAny-userMatch', 'display_name' => 'View All User Match'],
            ['name' => 'view-userMatch', 'display_name' => 'View Specific User Match'],
            ['name' => 'create-userMatch', 'display_name' => 'Create User Match'],
            ['name' => 'update-userMatch', 'display_name' => 'Update Specific User Match'],
            ['name' => 'delete-userMatch', 'display_name' => 'Delete Specific User Match'],

            ['name' => 'viewAny-user', 'display_name' => 'View All User'],
            ['name' => 'view-user', 'display_name' => 'View Specific User'],
            ['name' => 'create-user', 'display_name' => 'Create User'],
            ['name' => 'update-user', 'display_name' => 'Update Specific User'],
            ['name' => 'delete-user', 'display_name' => 'Delete Specific User'],
        ]);
    }
}
