<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\staffs\UpdateRequest;
use App\Http\Requests\staffs\StoreRequest;
use App\Models\UserMatch;
use App\Models\User;
use App\Models\Role;
use App\Models\MatchSoccer;

class UserMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'true';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $newStaff = UserMatch::create($request->all());
        $user = User::find($newStaff->user_id)->name;
        $match = MatchSoccer::find($newStaff->match_id)->name;
        $role = Role::find($newStaff->role_id)->name;
        $userMatch = [
            'user' => $user, 
            'match' => $match, 
            'role' => $role,
        ];
        return response()->json($userMatch);
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
    public function update(UpdateRequest $request, $id)
    {   
        $check = UserMatch::find($id)->update($request->all());
        return response()->json($check);
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
