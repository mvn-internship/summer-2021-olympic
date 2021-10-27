<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\RoleRequest;
use App\Http\Resources\Permission;
use App\Http\Resources\Role as ResourcesRole;
use App\Models\Permisson;
use App\Models\Role;

class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permisson::all();
        return $this->handleResponse(
            Permission::collection($permissions),
            'Permissions have been retrieved!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->permissions()->attach($request->permissions);
        return $this->handleResponse(new ResourcesRole($role), 'Role created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $permissions = Permisson::all();
        $rolePermissions = $role->permissions;
        return $this->handleResponse(
            [
                new ResourcesRole($role),
                Permission::collection($permissions),
                $rolePermissions,
            ],
            'Role detail'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::find($id);
        $role->fill($request->input())->save();
        $role->permissions()->sync($request->permissions);
        return $this->handleResponse(new ResourcesRole($role), 'Role successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->permissions()->detach();
        $role->delete();
        return $this->handleResponse(null, 'Role delete successfully!');
    }
}
