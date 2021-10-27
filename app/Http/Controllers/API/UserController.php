<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\UserRequest;
use App\Http\Resources\Role as ResourcesRole;
use App\Http\Resources\User as ResourcesUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return $this->handleResponse(
            ResourcesRole::collection($roles),
            'Users and Roles have been retrieved!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ];

        $user = User::create($userData);
        $user->roles()->attach($request->roles);
        return $this->handleResponse(new ResourcesUser($user), 'User created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRoles = $user->roles;
        return $this->handleResponse(
            [
                new ResourcesUser($user),
                ResourcesRole::collection($roles),
                $userRoles,
            ],
            'User detail'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->input())->save();
        $user->roles()->sync($request->roles);
        return $this->handleResponse(new ResourcesUser($user), 'User successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->toggleStatus()->save();
        return $this->handleResponse(null, 'User status update successfully!');
    }
}
