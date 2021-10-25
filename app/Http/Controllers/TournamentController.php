<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\InvidualGroup;


class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listTournaments = Tournament::withCount('organizationTournaments')->orderBy('end_date', 'desc')->get();
        
        return view('admin.pages.tournament.list', compact('listTournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.tournament.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournamentEdit = Tournament::with('organizationTournaments.team')->find($id);
        // $tournamentEdit = Tournament::find($id);
        // DB::enableQueryLog();
        $idTeamSelected = Tournament::find($id)->teams()->select('teams.id')->pluck('id')->toArray();
        // dd($idTeamSelected);

        $teams = Team::select(['id', 'name'])->whereNotIn('id', $idTeamSelected)->get();

        return view('admin.pages.tournament.edit', compact('tournamentEdit', 'teams'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // foreach ($tournamentDelete->organizationTournaments as $organizationTournament){
        //     $organizationTournament->delete();
        // }
        // dd($id);

        DB::beginTransaction();
        try {
            $tournamentDelete = Tournament::with('organizationTournaments', 'individuals.invidualGroups')->find($id);
            $idInvidualGroupDelete = [];
            foreach ($tournamentDelete->individuals as $individuals){
                // dd($individuals->invidual_groups);
                if (!empty($individuals->invidualGroups)){
                    foreach ($individuals->invidualGroups as $invidualGroup){
                        array_push($idInvidualGroupDelete, $invidualGroup->id);
                    }
                }
            }

            $tournamentDelete->organizationTournaments->each->delete();
            InvidualGroup::whereIn('id', $idInvidualGroupDelete)->delete();
            $tournamentDelete->individuals->each->delete();
            $tournamentDelete->delete();
            DB::commit();
            return redirect()->route('admin.tournament')->with(['success' => __('message.delete_tournamet_success')]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.tournament')->with(['fail' => __('message.delete_tournamet_fail')]);
        }
        
    }
}
