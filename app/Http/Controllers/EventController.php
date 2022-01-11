<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index(){
    $nome = "Felippe";
    $arr=[10,20,30];
    return view('welcome',
    [
    'nome'=>$nome,
    'arr'=>$arr 



]);
  }
  public function create(){
      return view('events.create');
  }
}
