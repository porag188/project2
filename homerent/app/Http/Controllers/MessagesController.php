<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
  public function create()
  {

       return view('posts.message');
  }

}
