<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\MatchResult;

class MatchResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
        $tournaments = Tournament::all();
        $pointRules = Tournament::with('individual.rank.pointRule')->find(10);
        $notification = __('message.updating');
        if( $pointRules->individual == null){
            return response()->json($notification,422);
        }
        $pointRule  = $pointRules->individual->rank->pointrule; 
     
        $teams = Tournament::with('teams')->find($id)->teams->pluck('id');
        $teamsName = Tournament::with('teams')->find($id)->teams;
        $pointArr = [];
        $i = 0;
        foreach($teams as $team){
            $pointArr[$team] = [
                'name' => $teamsName[$i]->name,
                'point' => 0,
                'win' => 0,
                'lose' => 0,
                'draw' => 0
            ];
            $i++;
        }
        $matchs = Tournament::with('matchSoccers.matchResults')->find($id)->matchSoccers;  
        foreach ($matchs as $match){
            $teamMatch = MatchResult::where('match_id', $match->id)->distinct()->get('team_id');
            $pointTeam1 = MatchResult::where('match_id', $match->id)->where('team_id', $teamMatch[0]->team_id)->sum('team_point');
            $pointTeam2 = MatchResult::where('match_id', $match->id)->where('team_id', $teamMatch[1]->team_id)->sum('team_point');
           
            if($pointTeam1 == $pointTeam2){
                $pointArr[$teamMatch[0]->team_id]['point'] += $pointRule['draw'];
                $pointArr[$teamMatch[0]->team_id]['draw'] += 1;
                $pointArr[$teamMatch[1]->team_id]['point'] += $pointRule['draw'];
                $pointArr[$teamMatch[1]->team_id]['draw'] += 1;
            }elseif($pointTeam1 > $pointTeam2){
                $pointArr[$teamMatch[0]->team_id]['point'] += $pointRule['win'];
                $pointArr[$teamMatch[0]->team_id]['win'] += 1;
                $pointArr[$teamMatch[1]->team_id]['point'] += $pointRule['lose'];
                $pointArr[$teamMatch[1]->team_id]['lose'] += 1;
            }else{
                $pointArr[$teamMatch[0]->team_id]['point'] += $pointRule['lose'];
                $pointArr[$teamMatch[0]->team_id]['lose'] += 1;
                $pointArr[$teamMatch[1]->team_id]['point'] += $pointRule['win'];
                $pointArr[$teamMatch[1]->team_id]['win'] += 1;
            }
        }
        $result = '';
        $i = 1;
        foreach($pointArr as $point){
            $result = $result.'<tr>
            <td>'.$i++.'</td>
            <td><strong class="text-white">'.$point['name'].'</strong></td>
            <td><img src="#"></td>
            <td>'.$point['win'].'</td>
            <td>'.$point['lose'].'</td>
            <td>'.$point['draw'].'</td>
            <td>'.$point['point'].'</td>
            </tr>';
        
        }

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
