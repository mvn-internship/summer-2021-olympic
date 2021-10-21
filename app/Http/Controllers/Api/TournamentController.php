<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;
use Illuminate\Support\Facades\Validator;
use App\Models\OrganizationTournament;

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
        $rules = array(
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start-date',
            'team' => 'required|min:2'
        );
        
        $validator =  Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        else {
            $data = $request->all();
            $startDate = strtotime($data['start_date']);
            $startDate = date('Y-m-d',$startDate);
            $endDate = strtotime($data['end_date']);
            $endDate = date('Y-m-d', $endDate);

            $teamIds = $data['team'];
            $tournamentData = array('name' => $data['name'], 'start_date' => $startDate, 'end_date' => $endDate);

            $tournament = Tournament::create($tournamentData);
            foreach($teamIds as $teamId) {
                $organizationTournament = array('tournament_id' => $tournament->id, 'teams_id' => $teamId);
                OrganizationTournament::create($organizationTournament);
            }
        
            $response = __('message.create_tournamet_success');
            return response()->json($response, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $rules = array(
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start-date',
            'team' => 'required|min:2'
        );
        
        $validator =  Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        else {
            $data = $request->all();
            $startDate = strtotime($data['start_date']);
            $startDate = date('Y-m-d',$startDate);
            $endDate = strtotime($data['end_date']);
            $endDate = date('Y-m-d', $endDate);

            $teamIds = $data['team'];
            $tournamentData = array('name' => $data['name'], 'start_date' => $startDate, 'end_date' => $endDate);

            Tournament::where('id', $id)->update($tournamentData);

            OrganizationTournament::where('tournament_id', $id)->delete();

            foreach($teamIds as $teamId) {
                $organizationTournament = array('tournament_id' => $id, 'teams_id' => $teamId);
                OrganizationTournament::create($organizationTournament);
            }
        
            $response = __('message.edit_tournamet_success');
            return response()->json($response, 200);
        }
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
