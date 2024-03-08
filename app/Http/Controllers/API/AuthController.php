<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Notifications\UserSignedUp;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request): UserResource
    {
        /**
         * @var User $user;
         */
        $user = User::query()->create($request->only(['name', 'email']));
        $user->phoneNumber()->create($request->only('phone'));
        $user->country()->create(['name' => $request->country]);

        Notification::send($user, new UserSignedUp());
        return new UserResource($user);
    }
}
