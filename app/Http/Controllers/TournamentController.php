<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Always using the necessary Model.
use App\Tournament;
use App\Person;

class TournamentController extends Controller {
  /**
   * Show the application tournament.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function tournament() {
      return view('tournament');
  }

  //To Create a user insert in a tournament and insert into the BBDD.
  public function tournCreate(Request $request) {
    $this->validate($request, [
      'nickname' => 'required',
      'email' => 'required'
    ]);
    Person::create($request->all());
    return redirect('/home');
  }

  //To list all the persons that are in the tournament.
  public function indexTournament() {
    //Taking all the persons from the BBDD.
    $people = Person::all();

    return view('tournament', ['people' => $people]);
  }

  //To take all the Persons from the BBDD to list with RESTful.
  public function index() {
    return Person::all();
  }

  //To put a Person in a Tournament using RESTful.
  public function store(Request $request) {
    $this->validate($request, [
      'nickname' => 'required',
      'email' => 'required'
    ]);
    $person = Person::create($request->all());

    return response()->json($person, 201);
  }

  //To delete a Person from a Tournament using RESTful.
  public function delete(Person $person) {
    $person->delete();
    return response()->json(null, 204);
  }
}
