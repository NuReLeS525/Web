<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('created_at', 'desc')->get();

        return view('admin.game.index', [
            'games' => $games
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_game = new Game();
        $new_game->name = $request->name;
        $new_game->img = $request->img;
        $new_game->save();

        return redirect()->back()->withSuccess('Игра была успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('admin.game.edit', [
            'game' => $game
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->name = $request->name;
        $game->img = $request->img;
        $game->save();

        return redirect()->back()->withSuccess('Игра была успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->back()->withSuccess('Игра была успешно удалена');
    }
}
