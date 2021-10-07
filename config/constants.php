<?php
class StaticArray
{
    public static $admin_side = ['admin', 'staff', 'secretary'];
    public static $user_side = ['participant', 'team_manager'];
}

class AuthUtils
{
    public static function redirectAuthenticatedRoute()
    {
        $roles = Auth::user()->roles;
        foreach ($roles as $role) {
            if (in_array($role->name, StaticArray::$admin_side)) {
                return redirect()->route('admin.dashboard');
            }
        }
        return redirect()->route('user.home');
    }
}
