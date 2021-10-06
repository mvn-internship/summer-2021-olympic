<?php

namespace App\Http\Controllers;

use App\Models\UserMatch;
use App\Models\User;
use App\Models\Role;
use App\Models\MatchSoccer;
use DB;
use Illuminate\Http\Request;

class UserMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $userMatches = UserMatch::all();
        return view('admin.pages.manageStaff.list', ['userMatches' => $userMatches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $roles = Role::get();
        $matchSoccers = MatchSoccer::get();
        return view('admin.pages.manageStaff.add', ['users' => $users, 'roles' => $roles, 'matchSoccers' => $matchSoccers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userMatch = $request->all();

        $check = UserMatch::create($userMatch);
        if ($check) {
            return back()->with('notification', 'Success');
        }else {
            return back()->with('notification', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Http\Response
     */
    public function show(UserMatch $userMatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
        $roles = Role::get();
        $matchSoccers = MatchSoccer::get();
        $userMatch = UserMatch::find($id);
        return view('admin.pages.manageStaff.update', ['userMatch' => $userMatch,'roles' => $roles,'matchSoccers' => $matchSoccers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $check = UserMatch::find($id)->update($request->all());
        if ($check) {
            return back()->with('notification', 'Success');
        }else {
            return back()->with('notification', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = UserMatch::find($id)->delete();
        if ($check) {
            return back()->with('notification', 'Success');
        }else {
            return back()->with('notification', 'Error');
        }
    }
}
