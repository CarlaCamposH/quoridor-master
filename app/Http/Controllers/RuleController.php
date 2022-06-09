<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Always using the necessary Model.
use App\Rule;

class RuleController extends Controller {
  public function indexRules() {
    //Taking all the rules from the BBDD.
    $rules = Rule::all();

    return view('rules', ['rules' => $rules]);
  }

  public function index() {
    return Rule::all();
  }
}
