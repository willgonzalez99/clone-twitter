<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::whereIn('user_id', Auth::user()->follows()->pluck('followed_id')->push(Auth::id()))
            ->latest()->get();
        return view('dashboard', compact('tweets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:280',
        ]);

        Tweet::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard');
    }
}
