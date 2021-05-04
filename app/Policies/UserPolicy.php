<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function edit(User $currentUser, User $user) {

        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }
}
