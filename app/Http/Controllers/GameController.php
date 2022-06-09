<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Always using the necessary Model.
use App\Review;

class GameController extends Controller {
  /**
   * Show the application game.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function game() {
      return view('game');
  }

  //To Create review and insert into the BBDD.
  public function review(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'description' => 'required',
      'number_stars' => 'required'
    ]);
    Review::create($request->all());
    return redirect('/game');
  }
}
