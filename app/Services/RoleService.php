<?php
namespace App\Services;


class RoleService
{
    public function getRoles()
    {
        return [
            'admin' => 'Admin',
            'user' => 'User',
            'editor' => 'Editor',
        ];
    }

    public function changeRole($user,$data)
    {
        $user->syncRoles($data['role']);
    }

    public function deleteRole($user)
    {
        $user->removeRole($user->roles->first());
    }

    public function assignRole($user,$data)
    {
        $user->assignRole($data['role']);
    }


}