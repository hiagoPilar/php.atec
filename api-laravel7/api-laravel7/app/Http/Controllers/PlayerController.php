<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'retired' => 'required|boolean'
        ]);

        $player = Player::create($request->all());

        return response()->json($player, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);

        if (!$player) {
            return response()->json([
                'message' => 'Player not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::find($id);

        if (!$player) {
            return response()->json([
                'message' => 'Player not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'address' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'retired' => 'sometimes|required|boolean'
        ]);

        $player->update($request->all());

        return response()->json($player);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player = Player::find($id);

        if (!$player) {
            return response()->json([
                'message' => 'Player not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $player->delete();

        return response()->json([
            'message' => 'Player deleted successfully'
        ], Response::HTTP_NO_CONTENT);
    }

    public function indexByStatus($retired)
    {
        $retired = filter_var($retired, FILTER_VALIDATE_BOOLEAN);
        $players = Player::where('retired', $retired)->get();

        return response()->json($players);
    }
}