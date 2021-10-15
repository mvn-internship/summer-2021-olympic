<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;


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
        //
        DB::enableQueryLog();
        $tournamentEdit = Tournament::with('organizationTournaments.team')->find($id);
        $idTeamSelected = [];
        foreach ($tournamentEdit->organizationTournaments as $organizationTournament) {
            array_push($idTeamSelected, $organizationTournament->team->id);
        }

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
        $tournamentDelete = Tournament::with('organizationTournaments')->find($id);
        foreach ($tournamentDelete->organizationTournaments as $organizationTournament){
            $organizationTournament->delete();
        }
        $tournamentDelete->delete();
        return back()->with(['success' => __('message.delete_tournamet_success')]);
    }
}
