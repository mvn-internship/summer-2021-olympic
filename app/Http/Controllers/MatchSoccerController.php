<?php

namespace App\Http\Controllers;

use App\Models\MatchSoccer;
use App\Models\Rank;
use App\Models\Group;
use App\Models\Tournament;
use App\Models\MatchResult;

use Illuminate\Http\Request;

class MatchSoccerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $matches = MatchSoccer::all();
        return view('admin.pages.matches.list', ['matches' => $matches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $match = MatchSoccer::find($id);
        $groups = Group::all();
        $tournaments = Tournament::all();
        $ranks = Rank::all();
        return view('admin.pages.matches.update', ['match' => $match, 'groups' => $groups, 'tournaments' => $tournaments, 'ranks' => $ranks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
    public function result($id)
    {   
        $match = MatchSoccer::find($id);
        $secs = MatchResult::where('match_id', $id)->distinct()->get('sec');
        if(count($secs) == 0){
            return view('admin.pages.matches.result', ['secs', $secs, 'match' => $match]);
        }
        $teams = MatchResult::where('match_id', $id)->distinct()->get('team_id');
        $pointTeam1 = MatchResult::where('match_id', $id)->where('team_id', $teams[0]->team_id)->get();
        $pointTeam2 = MatchResult::where('match_id', $id)->where('team_id', $teams[1]->team_id)->get();
    
        return view('admin.pages.matches.result',['match' => $match, 'secs' => $secs, 'pointTeam1' => $pointTeam1, 'pointTeam2' => $pointTeam2]);
    }
}
