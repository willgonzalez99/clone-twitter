<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(User $user)
    {
        Auth::user()->follows()->syncWithoutDetaching([$user->id]);
        return back();
    }

    public function followers(User $user)
    {
        return view('followers', [
            'user' => $user,
            'followers' => $user->followers
        ]);
    }

    public function followed(User $user)
    {
        $followed = $user->follows()->orderBy('name')->get();
        return view('followed', compact('user', 'followed'));
    }
}
