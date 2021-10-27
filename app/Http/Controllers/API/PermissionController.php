<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\PermissionRequest;
use App\Http\Resources\Permission;
use App\Models\Permisson;
use Illuminate\Http\Request;

class PermissionController extends BaseController
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
        $permission = Permisson::find($id);
        return $this->handleResponse(
            new Permission($permission),
            'Permission detail'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        $permission = Permisson::find($id);
        $permission->fill($request->input())->save();
        return $this->handleResponse(new Permission($permission), 'Permission successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permisson::find($id);
        $permission->roles()->detach();
        $permission->delete();
        return $this->handleResponse(null, 'Permission delete successfully!');
    }
}
