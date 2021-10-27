<?php

use App\Models\Permisson;
use App\Models\RoleUser;

if (!function_exists('redirectAuthenticatedRoute')) {
    function redirectAuthenticatedRoute()
    {
        $roles = Auth::user()->roles;
        foreach ($roles as $role) {
            if (in_array($role->name, config('constants.roles.admin_sides'))) {
                return redirect()->route('admin.dashboard');
            }
        }
        return redirect()->route('user.home');
    }
}

if (!function_exists('getPermissionOfUser')) {
    function getPermissionOfUser()
    {
        $roles = RoleUser::where('user_id', '=', auth()->id())->pluck('role_id');

        $permissions = Permisson::whereHas('role_permissions', function ($query) use ($roles) {
            $query->whereIn('role_id', $roles);
        })->pluck('name')->toArray();

        DB::enableQueryLog();
        return [
            'roles' =>  $roles,
            'permissions' => $permissions,
        ];
    }
}
