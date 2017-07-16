<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;
    public function create($user)
    {
        return $user->role_id == 1;
    }

    public function update(user $user)
    {
        return $user->role_id == 1;
    }

    public function destroy(user $user)
    {
        return $user->role_id === 1;
    }
}
