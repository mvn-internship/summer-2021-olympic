<?php
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
