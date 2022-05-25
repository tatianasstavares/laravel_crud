<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::orderBy('id','desc')->paginate();
        //dd($players);
        return view('pages.players.index', [
            'players' => $players
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($players);
        return view('pages.players.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>   'required',
            'address' => 'required',
            'description' => 'required',
            'retired' => 'required|boolean',
        ]);

        //exemplo 2

        // Player::create($request->all());


         //exemplo 3

        // Player::create([
        //     'name' => $request->name,
        //     'address' => $request->address,
        // ]);

         //exemplo 4


         $player = new Player();
         $player->name = $request->name;
         $player->address = $request->address;
         $player->description = $request->description;
        $player->retired = $request->retired;
         $player->save();

        return redirect('players')->with('status','Item created successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('components.players.player-form-show', [
            'player' => $player
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('pages.players.edit', [
            'player' => $player
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $this->validate($request, [
            'name' =>   'required',
            'address' => 'required',
            'description' => 'required',
            'retired' => 'required|boolean',
        ]);

        $player->update($request->all());
        return redirect('players')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('players')->with('status','Item deleted successfully!');
    }

    public function search(Request $request)
    {
        $players = Player::where('name', 'LIKE', '%' . $request->search . '%')->paginate(15);

        return view('pages.players.index', [
            'players' => $players
        ]);
    }
}
