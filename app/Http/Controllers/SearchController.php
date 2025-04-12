<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function searchUser(Request $request)
    {
        $username = $request->input('username');
        $user = User::where('username', $username)->firstOrFail();
        return redirect()->route('profile', $user);
    }
}
