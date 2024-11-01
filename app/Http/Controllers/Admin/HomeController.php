<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Foundation\Application;
use \Illuminate\Contracts\View\View;
use App\Models\User;
use App\Models\Social;
use App\Models\Game;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        $users_count = User::all()->count();
        $socials_count = Social::all()->count();
        $games_count = Game::all()->count();
        $questions_count = Question::all()->count();

        return view('admin.home.index', [
            'users_count' => $users_count,
            'socials_count' => $socials_count,
            'games_count' => $games_count,
            'questions_count' => $questions_count,
        ]);
    }
}
